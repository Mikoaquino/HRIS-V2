<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Filters\EmployeeFilter;
use Illuminate\Support\Facades\DB;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected Employee $employee) {}

    public function getEmployees(Request $request): LengthAwarePaginator
    {
        $employeeFilter = new EmployeeFilter;
        $queryClause = $employeeFilter->apply($request->filter);

        $employees = $this->employee->where($queryClause);

        if ($request->query('includeAccount')) {
            $employees = $employees->with('account');
        }

        return $employees->paginate()->appends($request->query());
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