<?php

namespace App\Http\Resources\V1;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'provinces' => ProvinceCollection::make($this->whenLoaded('provinces')),
            // We're including the cities since not every region has provinces. So, in a case similar
            // to NCR (w/o Province), we can allow the population for the dynamic dropdown.
            'cities' => CityCollection::make($this->whenLoaded('cities')),
        ];
    }
}
