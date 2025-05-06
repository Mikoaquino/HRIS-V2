<?php

namespace App\Services;

use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Models\City;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Pipeline;

class CityService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected City $city) {}

    public function getCities(Request $request): LengthAwarePaginator
    {
        return Pipeline::send($this->city->query())
            ->through([
                LoadModelRelations::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function getCity(Request $request, City $city): City
    {
        $city->when($request->has('load'),
            fn () => $this->applyRequestedRelations($city, $request)
        );

        return $city;
    }
}
