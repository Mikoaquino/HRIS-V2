<?php

namespace App\Services\V1;

use App\Enums\UserStatus; // not done
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Filters\V1\EmployeeFilter;
use Illuminate\Support\Facades\DB; // not done
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeService
{
    public function __construct(protected Employee $employee) {}

    public function getEmployees(Request $request): LengthAwarePaginator
    {
        $employeeFilter = new EmployeeFilter;
        $queryClause = $employeeFilter->transform($request);

        $employees = $this->employee->where($queryClause);

        if ($request->query('includeEmployee')) {
            $employees = $employees->with('employee');
        }

        return $employees->paginate()->appends($request->query());
    }
    
    /*
    public function createEmployee(array $validatedRequest): Employee
    {
        
    }
    */
    
    public function getEmployee(Request $request, string $id): Employee
    {
        $employee = $this->employee->findOrFail($id);

        if ($request->query('includeEmployee')) {
            return $employee->loadMissing('employee');
        }

        return $employee;
    }

    
    public function updateEmployee(array $validatedRequest, string $id): Employee
    {
        $employee = $this->employee->findOrFail($id);

        return DB::transaction(fn () => tap($employee)->update($validatedRequest));
        
    }
    
    public function deleteEmployee(string $id)
    {
        
    }

    public function temporarilyDeleteEmployee(Employee $employee)
    {
        
    }

    public function permanentlyDeleteEmployee(Employee $employee)
    {
        
    }
}