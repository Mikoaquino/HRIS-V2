<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\EmployeeResource;
use App\Http\Resources\V1\EmployeeCollection;
use Exception;
use App\Services\V1\EmployeeService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Employee;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\HttpResponse;
use App\Http\Requests\V1\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    use HttpResponse;

    public function __construct(protected EmployeeService $employeeService) {}

    public function index(Request $request): JsonResponse|EmployeeCollection
    {
        try {
            $employees = $this->employeeService->getEmployees($request);
            return EmployeeCollection::make($employees);
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }

    public function store(StoreEmployeeRequest $request):JsonResponse|EmployeeResource
    {
        try {
            $employee = $this->employeeService->createEmployee($request->validated());
            return $this->success(
                data: EmployeeResource::make($employee),
                message: __('response.success.create', ['resource' => 'employee']),
                status: Response::HTTP_CREATED
            );
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }



    public function show(Request $request, string $id): JsonResponse|EmployeeResource
    {
        try {
            $employee = $this->employeeService->getEmployee($request, $id);
            return $this->success(data: EmployeeResource::make($employee));
        } catch (Exception $e) {
            return $this->error(
                message: $e->getMessage(), 
                status: Response::HTTP_NOT_FOUND
            );
        }
    }

    public function update(UpdateEmployeeRequest $request, string $id): JsonResponse|EmployeeResource
    {
        try {
            $updatedEmployee = $this->employeeService->updateEmployee($request->validated(), $id);
            return $this->success(
                data: EmployeeResource::make($updatedEmployee),
                message: __('response.success.update', ['resource' => 'employee']),
            );
        } catch (Exception $e) {
            return $this->error(
                message: $e->getMessage(),
                status: Response::HTTP_NOT_FOUND,
            );
        }
    }
    
    public function destroy(string $id): JsonResponse
    {
        try {
            $employee = Employee::find($id);
    
            if (!$employee) {
                throw new Exception('Employee not found');
            }
    
            $employee->delete();
    
            return $this->success(
                message: __('response.success.delete', ['resource' => 'employee'])
            );
        } catch (Exception $e) {
            return $this->error(
                message: $e->getMessage(),
                status: Response::HTTP_NOT_FOUND,
            );
        }
    }
}    
