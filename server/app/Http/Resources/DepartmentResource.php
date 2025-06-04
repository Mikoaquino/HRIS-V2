<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   => $this->description,
            'company_id'    => $this->company_id,
            'archived_at'   => $this->whenNotNull($this->archived_at),
            'company'       => CompanyResource::make($this->whenLoaded('company')),
            'employees'     => EmployeeCollection::make($this->whenLoaded('employees')),
        ];
    }
}
