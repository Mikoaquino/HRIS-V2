<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray(Request $request): array
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
            'sss_id' => $this->sss_id,
            'tin_id' => $this->tin_id,
            'philhealth_id' => $this->philhealth_id,
            'pagibig_id' => $this->pagibig_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'employment_type_id' => EmploymentTypeResource::make($this->whenLoaded('employmentType')),
            'account' => UserResource::make($this->whenLoaded('account'))
        ];
    }
}
