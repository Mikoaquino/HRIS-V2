<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'type'             => $this->type,
            'address'          => $this->address,
            'contact_number'   => $this->contact_number,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
            'deleted_at'       => $this->whenNotNull($this->deleted_at),
            'departments'      => DepartmentCollection::make($this->whenLoaded('departments')),
        ];
    }
}
