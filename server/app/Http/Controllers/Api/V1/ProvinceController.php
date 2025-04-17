<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProvinceCollection;
use App\Http\Resources\V1\ProvinceResource;
use App\Models\Province;
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

    public function show(Request $request, Province $province): JsonResponse
    {
        $province = $this->service->getProvince($request, $province);

        return $this->success(
            data: ProvinceResource::make($province),
            status: Response::HTTP_FOUND,
        );
    }
}
