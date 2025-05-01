<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CityService
{
    public function __construct(protected City $city) {}

    public function getCities(Request $request): LengthAwarePaginator
    {
        $query = $this->city->query();

        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $query->with($relationships);
        }

        return $query->paginate()->appends($request->query());
    }

    public function getCity(Request $request, City $city): City
    {
        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $city->loadMissing($relationships);
        }

        return $city;
    }
}