<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class JobPositionCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => JobPositionResource::collection($this->collection),
        ];
    }
}
