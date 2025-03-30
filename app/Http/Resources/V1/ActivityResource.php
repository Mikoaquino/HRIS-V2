<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ActivityResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'logName' => $this->log_name,
            'description' => $this->description,
            'subjectType' => $this->subject_type,
            'event' => $this->event,
            'subjectId' => $this->subject_id,
            'causerType' => $this->causer_type,
            'causerId' => $this->causer_id,
            'properties' => $this->transformToCamelCase($this->properties),
            'batchUuid' => $this->batch_uuid,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }

    private function transformToCamelCase($props): array
    {
        $newPairs = [];

        foreach ($props as $key => $values) {
            $newPairs[$key] = [];
            foreach ($values as $key2 => $value2) {
                $newPairs[$key][Str::camel($key2)] = $value2;
            }
        }
        
        return $newPairs;
    }
}
