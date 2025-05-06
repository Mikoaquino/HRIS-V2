<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeePresentAddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'                 => $this->id,
            'additional_details' => $this->additional_details,
            'zip_code'           => $this->zip_code,
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
            'employee'           => EmployeeResource::make($this->whenLoaded('employee')),
            'barangay'           => BarangayResource::make($this->whenLoaded('barangay')),
            'full_address'       => $this->full_address,
        ];
    }
}
