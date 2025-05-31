<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'address',
        'contact_number',
    ];

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
