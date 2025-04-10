<?php

namespace App\Http\Resources\V1;

use App\Enums\CivilStatus;
use App\Enums\Gender;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'suffix'=> $this->suffix,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'civil_status' => $this->civil_status,
            'nationality' => $this->nationality,
            'religion' => $this->religion,
            'contact_number' => $this->contact_number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'account' => new UserResource($this->whenLoaded('account')),
        ];
    }
}
