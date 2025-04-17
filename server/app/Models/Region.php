<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    public $timestamps = false;

    protected $fillable = [];

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, 'region_code', 'region_code');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'region_code', 'region_code');
    }

    public function barangays(): HasMany
    {
        return $this->hasMany(Barangay::class, 'region_code', 'region_code');
    }
}
