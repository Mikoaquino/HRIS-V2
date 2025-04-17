<?php

namespace App\Services\V1;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProvinceService
{
    public function __construct(protected Province $province) {}

    public function getProvinces(Request $request): Collection
    {
        $query = $this->province->query();

        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $query->with($relationships);
        }

        return $query->get();
    }

    public function getProvince(Request $request, Province $province): Province
    {
        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $province->loadMissing($relationships);
        }

        return $province;
    }
}