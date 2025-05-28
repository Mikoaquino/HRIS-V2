<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyTimeReport extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];

    public function getDeletedAtColumn(): string
    {
        return 'archived_at';
    }

    public function getTimeAttribute(): string
    {
        return $this->date_time->toTimeString();
    }

    public function getDateAttribute(): string
    {
        return $this->date_time->toDateString();
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
