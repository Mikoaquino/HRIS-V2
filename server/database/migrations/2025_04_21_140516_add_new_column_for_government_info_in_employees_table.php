<?php

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
            $table->after('contact_number', function ($table) {
                $table->unsignedBigInteger('sss_id');
                $table->unsignedBigInteger('tin_id');
                $table->unsignedBigInteger('philhealth_id');
                $table->unsignedBigInteger('pagibig_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['sss_id', 'tin_id', 'philhealth_id', 'pagibig_id']);
        });
    }
};
