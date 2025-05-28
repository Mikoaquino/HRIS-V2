<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DailyTimeReportResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'employee_id' => $this->employee_id,
            'date'        => $this->date,
            'time'        => $this->time,
            'archived_at' => $this->whenNotNull($this->archived_at),
        ];
    }
}
