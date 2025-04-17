<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Province extends Model
{
    public $timestamps = false;

    protected $fillable = [];

    public function getRouteKeyName(): string
    {
        return 'code';
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'province_code', 'province_code');
    }

    public function barangays(): HasMany
    {
        return $this->hasMany(Barangay::class, 'province_code', 'province_code');
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_code', 'region_code');
    }
}
