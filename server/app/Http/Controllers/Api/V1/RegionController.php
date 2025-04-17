<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Region;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\V1\RegionService;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\RegionResource;
use App\Http\Resources\V1\RegionCollection;
use Symfony\Component\HttpFoundation\Response;

class RegionController extends Controller
{
    use HttpResponse;

    public function __construct(protected RegionService $service) {}

    public function index(Request $request): JsonResponse
    {
        $regions = $this->service->getRegions($request);

        return $this->success(RegionCollection::make($regions));
    }

    public function show(Request $request, Region $region): JsonResponse
    {
        $region = $this->service->getRegion($request, $region);

        return $this->success(
            data: RegionResource::make($region),
            status: Response::HTTP_FOUND
        );
    }
}
