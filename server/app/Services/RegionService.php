<?php

namespace App\Services;

use App\Models\Region;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class RegionService
{
    public function __construct(protected Region $region) {}

    public function getRegions(Request $request): Collection
    {
        $query = $this->region->query();

        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $query->with($relationships);
        }

        return $query->get();
    }

    public function getRegion(Request $request, Region $region): Region
    {
        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $region->loadMissing($relationships);
        }

        return $region;
    }
}
