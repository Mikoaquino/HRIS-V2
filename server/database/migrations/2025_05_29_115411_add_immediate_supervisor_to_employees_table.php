<?php

use App\Models\Employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->after('department_id', function () use ($table) {
                $table->foreignIdFor(Employee::class, 'immediate_supervisor_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeignIdFor(Employee::class, 'immediate_supervisor_id');
        });
    }
};
