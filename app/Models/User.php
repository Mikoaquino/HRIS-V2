<?php

namespace App\Models;

use App\Casts\Hash;
use App\Enums\UserStatus;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity, SoftDeletes;

    protected const LOG_NAME = 'user';

    protected static $recordEvents = [
        'created',
        'updated',
        'deleted',
    ];

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
        'deleted_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'password' => Hash::class,
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
            ->useLogName(self::LOG_NAME)
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $event) {
                $causer = Auth::user()->employee->full_name ?? 'System';
                return match ($event) {
                    'created' => __('activity.create.user', ['causer' => $causer]),
                    'updated' => $this->deleted_at
                        ? __('activity.temporary_delete.user.single', ['causer' => $causer])
                        : __('activity.update.user', ['causer' => $causer]),
                    'deleted' => __('activity.force_delete.user.single', ['causer' => $causer]),
                };
            });
    }
}
