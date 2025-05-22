<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'log_name'    => $this->log_name,
            'description' => $this->description,
            'event'       => $this->event,
            'batch_uuid'  => $this->batch_uuid,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'causer'      => $this->whenLoaded('causer', fn () => $this->causer->toResource()),
            'subject'     => $this->whenLoaded('subject', fn () => $this->subject->toResource()),
        ];
    }
}
