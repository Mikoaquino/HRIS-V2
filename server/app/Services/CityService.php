<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Http\Request;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use Illuminate\Support\Facades\Pipeline;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

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