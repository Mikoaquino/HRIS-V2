<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProvinceCollection;
use App\Http\Resources\V1\ProvinceResource;
use App\Services\V1\ProvinceService;
use Symfony\Component\HttpFoundation\Response;

class ProvinceController extends Controller
{
    use HttpResponse;

    public function __construct(protected ProvinceService $service) {}

    public function index(Request $request): JsonResponse
    {
        $provinces = $this->service->getProvinces($request);

        return $this->success(ProvinceCollection::make($provinces));
    }

    public function show(Request $request, string $code): JsonResponse
    {
        $province = $this->service->getProvince($request, $code);

        if (! $province) {
            return $this->error(
                message: __('response.error.show', ['resource' => $code]),
                status: Response::HTTP_NOT_FOUND
            );
        }

        return $this->success(
            data: ProvinceResource::make($province),
            status: Response::HTTP_FOUND,
        );
    }
}
