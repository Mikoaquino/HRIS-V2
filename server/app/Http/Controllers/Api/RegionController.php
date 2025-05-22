<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegionCollection;
use App\Http\Resources\RegionResource;
use App\Models\Region;
use App\Services\RegionService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
