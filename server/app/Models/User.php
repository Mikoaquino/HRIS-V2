<?php

namespace App\Models;

use App\Enums\ActivityLog;
use App\Enums\UserStatus;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity, SoftDeletes;

    protected $fillable = [
        'email',
        'employee_id',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'status' => UserStatus::class,
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logExcept(['password', 'remember_token'])
            ->logOnlyDirty()
            ->useLogName(ActivityLog::USER->value)
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $event) {
                $causer = request()->user()->employee->first_name ?? 'System';
                return match ($event) {
                    'created' => __('activity.create.user'),
                    'updated' => $this->deleted_at
                        ? __('activity.temporary_delete.user.single')
                        : __('activity.update.user'),
                    'deleted' => __('activity.force_delete.user.single'),
                };
            });
    }
}
