<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentCollection;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use App\Services\DepartmentService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DepartmentController extends Controller
{
    use HttpResponse;

    public function __construct(private DepartmentService $service) {}

    public function index(): DepartmentCollection
    {
        $departments = $this->service->getDepartments();

        return DepartmentCollection::make($departments);
    }

    public function store(StoreDepartmentRequest $request): JsonResponse
    {
        $department = $this->service->createDepartment($request->validated());

        return $this->success(
            data: DepartmentResource::make($department),
            message: __('response.department.success_create', [
                'department' => $department->name,
            ]),
            status: Response::HTTP_CREATED,
        );
    }

    public function show(Request $request, Department $department): JsonResponse
    {
        $department = $this->service->getDepartment($request, $department);

        return $this->success(
            data: DepartmentResource::make($department),
            status: Response::HTTP_FOUND,
        );
    }

    public function update(UpdateDepartmentRequest $request, Department $department): JsonResponse
    {
        $updatedDepartment = $this->service->updateDepartment($request->validated(), $department);

        return $this->success(
            data: DepartmentResource::make($department),
            message: __('response.department.success_update', [
                'department' => $updatedDepartment->name,
            ])
        );
    }

    public function destroy(Department $department): JsonResponse
    {
        $department = $this->service->deleteDepartment($department);

        $message = $department->exists
            ? 'response.department.delete.temporary'
            : 'response.department.delete.permanent';

        return $this->success(message: __($message, [
            'department' => $department->name,
        ]));
    }
}
