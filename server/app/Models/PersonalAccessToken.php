<?php

namespace App\Models;

use App\Enums\ActivityLog;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use LogsActivity;

    protected static $recordEvents = [
        'created',
        'updated',
    ];

    // TODO: Add pronoun to deleted event
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logExcept(['token'])
            ->logOnlyDirty()
            ->useLogName(ActivityLog::AUTH->value)
            ->setDescriptionForEvent(function (string $event) {
                $causer = $this->tokenable->employee->first_name;
                return match ($event) {
                    'created' => __('activity.create.access_token', [
                        'causer' => $causer
                    ]),
                    'updated' => __('activity.update.access_tokens', [
                        'causer' => $causer,
                        'pronoun' => 'his',
                    ]),
                };
            });
    }
}
