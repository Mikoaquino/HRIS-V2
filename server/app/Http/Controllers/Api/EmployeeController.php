<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use App\Services\EmployeeService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeController extends Controller
{
    use HttpResponse;

    public function __construct(protected EmployeeService $service) {}

    public function index(): EmployeeCollection
    {
        $employees = $this->service->getEmployees();

        return EmployeeCollection::make($employees);
    }

    public function store(StoreEmployeeRequest $request): JsonResponse
    {
        $employee = $this->service->createEmployee($request->validated());

        return $this->success(
            data: EmployeeResource::make($employee),
            message: __('response.success.create', ['resource' => 'employee']),
            status: Response::HTTP_CREATED
        );
    }

    public function show(Request $request, Employee $employee): JsonResponse
    {
        $employee = $this->service->getEmployee($request, $employee);

        return $this->success(
            data: EmployeeResource::make($employee),
            status: Response::HTTP_FOUND,
        );
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee): JsonResponse
    {
        $updatedEmployee = $this->service->updateEmployee($request->validated(), $employee);

        return $this->success(
            data: EmployeeResource::make($updatedEmployee),
            message: __('response.success.update', ['resource' => 'employee']),
        );
    }

    public function destroy(Employee $employee): JsonResponse
    {
        $employee = $this->service->handleEmployeeDelete($employee);

        $message = $employee->exists
            ? 'response.employee.delete.temporary'
            : 'response.employee.delete.permanent';

        return $this->success(message: __($message, [
            'employee' => $employee->first_name,
        ]));
    }
}
