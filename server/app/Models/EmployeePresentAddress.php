<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeePresentAddress extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected function getFullAddressAttribute(): string
    {
        return sprintf(
            '%s, %s, %s, %s, %s, %s',
            $this->additional_details,
            $this->barangay->name,
            $this->barangay->city->name,
            $this->zip_code,
            $this->barangay?->province?->name,
            $this->barangay->region->name,
        );
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }
}
