<?php

namespace App\Services;


use App\Filters\LoadModelRelations;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Filters\PaginateQueryBuilder;
use App\Filters\Employee\SearchEmployee;
use App\Filters\Employee\SortEmployee;
use Illuminate\Support\Facades\Pipeline;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected Employee $employee) {}

    public function getEmployees(Request $request): LengthAwarePaginator
    {
        return Pipeline::send($this->employee->query())
            ->through([
                SearchEmployee::class,
                SortEmployee::class,
                LoadModelRelations::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }
    
    public function createEmployee(array $validatedRequest): Employee
    {
        return DB::transaction(fn () => $this->employee->create($validatedRequest));
    }
    
    public function getEmployee(Request $request, string $id): Employee
    {
        $employee = $this->employee->findOrFail($id);

        if ($request->has('load')) {
            $employee = $this->applyRequestedRelations($employee, $request);
        }

        return $employee;
    }

    public function updateEmployee(array $validatedRequest, string $id): Employee
    {
        $employee = $this->employee->findOrFail($id);

        return DB::transaction(fn () => tap($employee)->update($validatedRequest));
        
    }
}