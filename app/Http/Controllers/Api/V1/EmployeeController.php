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

public function store(Request $request)
{
    // Validate input
    $validator = Validator::make($request->all(), [
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validator->errors(),
        ], 422);
    }

    // Create employee
    $employee = Employee::create([
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
    ]);

    return response()->json([
        'status' => 'success',
            'message' => 'Employee created successfully!',
            'data' => new EmployeeResource($employee)
        ], 201);
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
