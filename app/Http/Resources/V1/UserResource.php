<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'emailVerifiedAt' => $this->email_verified_at,
            'password' => $this->password,
            'rememberToken' => $this->remember_token,
            'status' => $this->status,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'employee' => new EmployeeResource($this->whenLoaded('employee')),
        ];
    }
}
