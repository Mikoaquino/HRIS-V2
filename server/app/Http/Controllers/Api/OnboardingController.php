<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOnboardingRequest;
use App\Http\Resources\EmployeeResource;
use App\Services\OnboardingService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class OnboardingController extends Controller
{
    use HttpResponse;

    public function __construct(private OnboardingService $service) {}

    public function store(StoreOnboardingRequest $request): JsonResponse
    {
        $onboardedEmployee = $this->service->createOnboardingRecord($request->validated());

        return $this->success(
            data: EmployeeResource::make($onboardedEmployee),
            message: __('response.success.create', ['resource' => 'employee']),
            status: Response::HTTP_CREATED
        );
    }
}
