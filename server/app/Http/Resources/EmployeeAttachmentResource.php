<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeAttachmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'client_name' => $this->client_name,
            'hashed_name' => $this->hashed_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'employee' => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
