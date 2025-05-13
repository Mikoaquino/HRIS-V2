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

    public function __construct(protected Employee $employee) {}

    public function getEmployees(Request $request): LengthAwarePaginator
    {
        $employeeFilter = new EmployeeFilter;
        $queryClause = $employeeFilter->apply($request->filter ?? []);

        $employees = $this->employee->where($queryClause);

        if ($request->query('includeAccount')) {
            $employees = $employees->with('account');
        }
        
        return Pipeline::send($this->employee->query())
        ->through([
            SearchEmployee::class,
            SortEmployee::class,
            IncludeSoftDeletedModels::class,
            EmployeeFilters::class,
            LoadEmployee::class,
            EmployeePaginate::class,

            
        ])
        ->then(fn (LengthAwarePaginator $paginator) => 
            $paginator->appends($request->query())
        );
    }
    
    public function createEmployee(array $validatedRequest): Employee
    {
        return DB::transaction(fn () => $this->employee->create($validatedRequest));
    }
    
    public function getEmployee(Request $request, string $id): Employee
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
