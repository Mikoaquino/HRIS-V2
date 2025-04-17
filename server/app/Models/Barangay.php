<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barangay extends Model
{
    public $timestamps = false;

    protected $fillable = [];

    public function getRouteKeyName(): string
    {
        return 'code';
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_code', 'city_code');
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_code', 'province_code');
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_code', 'region_code');
    }
}
