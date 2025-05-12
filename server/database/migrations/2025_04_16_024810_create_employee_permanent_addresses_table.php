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
        Schema::create('employee_permanent_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employee::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('barangay_code', 10);
            $table->foreign('barangay_code')
                ->references('code')
                ->on('barangays')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->text('additional_details');
            $table->string('zip_code', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_permanent_addresses');
    }
};
