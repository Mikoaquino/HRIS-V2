<?php

namespace App\Services\V1;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

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

    public function getRegion(Request $request, string $code): ?Region
    {
        $region = $this->region->firstWhere('code', $code);

        if (! $region) {
            return null;
        }

        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $region->loadMissing($relationships);
        }

        return $region;
    }
}