<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentCollection;
use App\Models\Department;
use App\Traits\HttpResponse;
use App\Services\DepartmentService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\DepartmentResource;

class DepartmentController extends Controller
{
    use HttpResponse;

    public function __construct(protected DepartmentService $service) {}

    public function index(): DepartmentCollection
    {
        $departments = $this->service->getDepartments();

        return DepartmentCollection::make($departments);
    }

    public function show(Request $request, Department $department): JsonResponse
    {
        $department = $this->service->getDepartment($request, $department);

        return $this->success(
            data: DepartmentResource::make($department),
            status: Response::HTTP_FOUND,
        );
    }
}
