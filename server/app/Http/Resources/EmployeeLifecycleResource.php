<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeLifecycleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'hired_at'     => $this->hired_at,
            'separated_at' => $this->separated_at,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
            'employee'     => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
