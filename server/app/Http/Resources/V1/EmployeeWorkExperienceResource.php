<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeWorkExperienceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'previous_employer' => $this->previous_employer,
            'job_position' => $this->job_position,
            'from' => $this->from,
            'to' => $this->to,
            'reason_for_leaving' => $this->reason_for_leaving,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'employee' => EmployeeResource::make($this->whenLoaded('employee')),
        ];
    }
}
