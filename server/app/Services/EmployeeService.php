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
use Illuminate\Support\Facades\Pipeline;

class EmployeeService
{
    use LoadsRequestQueryRelationship;

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
        return Employee::create($validated);
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
