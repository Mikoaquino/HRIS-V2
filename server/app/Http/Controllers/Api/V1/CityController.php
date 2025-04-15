<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use App\Services\V1\CityService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CityCollection;
use App\Http\Resources\V1\CityResource;
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

    public function show(Request $request, string $code): JsonResponse
    {
        $city = $this->service->getCity($request, $code);

        if (! $city) {
            return $this->error(
                message: __('response.error.show', ['resource' => $code]),
                status: Response::HTTP_NOT_FOUND
            );
        }

        return $this->success(
            data: CityResource::make($city),
            status: Response::HTTP_FOUND,
        );
    }
}
