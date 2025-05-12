<?php

namespace App\Services;

use App\Filters\Employee\SearchEmployee;
use App\Filters\Employee\SortEmployee;
use App\Filters\IncludeSoftDeletedModels;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Models\Employee;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Pipeline;

class EmployeeService
{
    use LoadsRequestQueryRelationship;

    public function __construct(
        private EmployeeAddressService $addressService,
        private EmployeeAttachmentService $attachmentService,
        private EmployeeEducationService $educationService,
        private EmployeeLifecycleService $lifecycleService,
        private EmployeeWorkExperienceService $workExperienceService,
    ) {}

    public function getEmployees(): LengthAwarePaginator
    {
        return Pipeline::send(Employee::query())
            ->through([
                SearchEmployee::class,
                SortEmployee::class,
                LoadModelRelations::class,
                IncludeSoftDeletedModels::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function createEmployee(array $validated): Employee
    {
        return DB::transaction(function () use ($validated) {
            $employee = Employee::create($validated);

            $this->addressService->createPresentAddress(array_merge(
                $validated['present_address'],
                ['employee_id' => $employee->id]
            ));

            $this->addressService->createPermanentAddress(array_merge(
                $validated['permanent_address'],
                ['employee_id' => $employee->id]
            ));

            $validated = array_merge($validated, ['employee_id' => $employee->id]);

            $this->educationService->createEducation($validated);

            $this->workExperienceService->createWorkExperiences($validated);

            $this->attachmentService->handleUploads($validated);

            $this->lifecycleService->createNewHire($validated);

            return $employee;
        });
    }

    public function getEmployee(Request $request, Employee $employee): Employee
    {
        $employee->when($request->filled('load'),
            fn () => $this->applyRequestedRelations($employee, $request)
        );

        return $employee;
    }

    public function updateEmployee(array $validated, Employee $employee): Employee
    {
        return DB::transaction(function () use ($validated, $employee) {
            $employee = tap($employee)->update($validated);

            if (Arr::exists($validated, 'present_address')) {
                $this->addressService->updatePresentAddress(
                    $validated['present_address'],
                    $employee->presentAddress
                );
            }

            if (Arr::exists($validated, 'permanent_address')) {
                $this->addressService->updatePermanentAddress(
                    $validated['permanent_address'],
                    $employee->permanentAddress
                );
            }

            $validated = array_merge($validated, ['employee_id' => $employee->id]);

            if (Arr::exists($validated, 'educations')) {
                $this->educationService->updateEducation($validated);
            }

            if (Arr::exists($validated, 'work_experiences')) {
                $this->workExperienceService->updateWorkExperiences($validated);
            }

            if (Arr::exists($validated, 'attachments')) {
                $this->attachmentService->handleUploads($validated);
            }

            if (Arr::exists($validated, 'hired_at')) {
                $this->lifecycleService->updateTenure($validated, $employee->lifecycle);
            }

            return $employee;
        });
    }

    public function handleEmployeeDelete(Employee $employee): Employee
    {
        if ($employee->trashed()) {
            return tap($employee)->forceDelete();
        }

        return tap($employee)->delete();
    }
}
