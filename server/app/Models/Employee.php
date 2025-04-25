<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    
    public function account(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(EmployeeEducation::class);
    }

    public function workExperiences(): HasMany
    {
        return $this->hasMany(EmployeeWorkExperience::class);
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(EmployeeAttachment::class);
    }

    public function lifecycle(): HasOne
    {
        return $this->hasOne(EmployeeLifecycle::class);
    }

    public function termination(): HasOne
    {
        return $this->hasOne(TerminatedEmployee::class);
    }

    public function presentAddress(): HasOne
    {
        return $this->hasOne(EmployeePresentAddress::class);
    }

    public function permanentAddress(): HasOne
    {
        return $this->hasOne(EmployeePermanentAddress::class);
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logAll()
            ->useLogName(self::LOG_NAME)
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $event) {
                $causer = request()->user()->employee->first_name ?? 'System';
                return match ($event) {
                    'created' => __('activity.create.employee', ['causer' => $causer]),
                    'updated' => __('activity.update.employee', ['causer' => $causer]),
                };
            });
    }
}
