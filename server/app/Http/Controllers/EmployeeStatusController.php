<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeStatus;
use Illuminate\Http\Request;

class EmployeeStatusController extends Controller
{
    use HttpResponse;

    public function __construct(protected EmployeeStatusService $service) {}

    public function index(Request $request): JsonResponse|EmployeeStatusCollection
    {
        $statuses = $this->service->getEmployeeStatuses($request);

        return EmployeeStatusCollection::make($statuses);
    }

    public function store(StoreEmployeeStatusRequest $request): JsonResponse|EmployeeStatusResource
    {
        $newStatus = $this->service->createEmployeeStatus($request->validated());

        return $this->success(
            data: EmployeeStatusResource::make($newStatus),
            message: __('response.success.create', ['resource' => 'employee status']),
            status: Response::HTTP_CREATED
        );
    }

    public function show(Request $request, string $id): JsonResponse|EmployeeStatusResource
    {
        $status = $this->service->getEmployeeStatus($request, $id);

        if (! $status) {
            return $this->error(
                message: __('response.error.show', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return $this->success(data: EmployeeStatusResource::make($status));
    }

    public function update(UpdateEmployeeStatusRequest $request, string $id): JsonResponse|EmployeeStatusResource
    {
        $updatedStatus = $this->service->updateEmployeeStatus($request->validated(), $id);

        if (! $updatedStatus) {
            return $this->error(
                message: __('response.error.update', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return $this->success(
            data: EmployeeStatusResource::make($updatedStatus),
            message: __('response.success.update', ['resource' => 'employee status']),
        );
    }

    public function destroy(string $id): JsonResponse
    {
        $response = $this->service->deleteEmployeeStatus($id);

        if (! $response) {
            return $this->error(
                message: __('response.error.delete', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return $this->success(message: __('response.success.delete', ['resource' => 'employee status']));
    }
}
