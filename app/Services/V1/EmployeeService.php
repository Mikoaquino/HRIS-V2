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

        if ($request->query('includeAccount')) {
            return $employee->loadMissing('account');
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
        $employee = $this->employee->withTrashed()->findOrFail($id);

        if ($employee->trashed()) {
            return $this->pertmanentlyDeleteEmployee($employee);
        }

        return $this->temporarilyDeleteUser($employee);
    }

    public function temporarilyDeleteEmployee(Employee $employee)
    {
        return DB::transaction(function () use ($employee) {
            $employee->deleteOrFail();
            $employee->status = EmployeeStatus::INACTIVE;
            $employee->saveQuietly();
        });
    }

    public function permanentlyDeleteEmployee(Employee $employee)
    {
        return DB::transaction(function () use ($employee) {
            $employee->employee->forceDelete();
            $employee->forceDelete();
        }); 
    }
}