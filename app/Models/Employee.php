<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory, LogsActivity;

    protected const LOG_NAME = 'employee';

    protected static $recordEvents = [
        'created',
        'updated',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => implode(" ",
                array_filter([
                    $attributes['first_name'],
                    $attributes['middle_name'],
                    $attributes['last_name'],
                ])
            )
        );
    }
    
    public function account(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->useLogName(self::LOG_NAME)
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $event) {
                $causer = Auth::user() ?? 'System';
                return match ($event) {
                    'created' => __('activity.create.employee', ['causer' => $causer]),
                    'updated' => __('activity.update.employee', ['causer' => $causer]),
                };
            });
    }
}
