<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use App\Services\CityService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\CityCollection;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{
    use HttpResponse;

    public function __construct(protected CityService $service) {}

    public function index(Request $request): CityCollection
    {
        $cities = $this->service->getCities($request);

        return CityCollection::make($cities);
    }

    public function show(Request $request, City $city): JsonResponse
    {
        $city = $this->service->getCity($request, $city);

        return $this->success(
            data: CityResource::make($city),
            status: Response::HTTP_FOUND,
        );
    }
}
