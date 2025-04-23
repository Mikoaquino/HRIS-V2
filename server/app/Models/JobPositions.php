<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobPositions extends Model
{
    use HasFactory;

    public function departments(): BelongsTo
    {
        return $this->belongsTo(Departments::class);
    }
}
