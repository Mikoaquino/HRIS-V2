<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    protected $table = 'employee_status'; 

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'status',
    ];
    

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
