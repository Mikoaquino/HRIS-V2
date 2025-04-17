<?php

namespace App\Services\V1;

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

    public function getCity(Request $request, string $code): ?City
    {
        $city = $this->city->firstWhere('code', $code);

        if (! $city) {
            return null;
        }

        if ($request->has('load')) {
            $relationships = explode(',', $request->load);

            $city->loadMissing($relationships);
        }

        return $city;
    }
}