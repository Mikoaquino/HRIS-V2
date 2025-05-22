<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminatedEmployeeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'reason'     => $this->reason,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'employee'   => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
