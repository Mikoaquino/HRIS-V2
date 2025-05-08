<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Filters\Employee\SortEmployee;
use App\Filters\Employee\SearchEmployee;
use Illuminate\Support\Facades\Pipeline;
use App\Filters\IncludeSoftDeletedModels;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

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

            $this->educationService->createEducations($validated);

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
        return tap($employee)->update($validated);
    }

    public function handleEmployeeDelete(Employee $employee): Employee
    {
        if ($employee->trashed()) {
            return tap($employee)->forceDelete();
        }

        return tap($employee)->delete();
    }
}
