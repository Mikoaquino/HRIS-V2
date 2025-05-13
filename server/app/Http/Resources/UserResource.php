<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'email'             => $this->email,
            'employee_id'       => $this->employee_id,
            'status'            => $this->status,
            'email_verified_at' => $this->whenNotNull($this->email_verified_at),
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'deleted_at'        => $this->whenNotNull($this->deleted_at),
            'employee'          => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
