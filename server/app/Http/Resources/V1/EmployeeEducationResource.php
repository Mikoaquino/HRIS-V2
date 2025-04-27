<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeEducationResource extends JsonResource
{    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'school' => $this->school,
            'degree' => $this->degree,
            'graduated_at' => $this->graduated_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'employee' => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
