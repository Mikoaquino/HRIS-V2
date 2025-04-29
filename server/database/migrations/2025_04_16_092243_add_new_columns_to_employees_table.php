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
            $table->after('last_name', function ($table) {
                $table->string('suffix')->nullable();
                $table->date('birth_date');
                $table->string('gender');
                $table->string('civil_status');
                $table->string('nationality');
                $table->string('religion');
                $table->string('contact_number', 11);
                $table->foreignId('employment_type_id')
                    ->after('contact_number')
                    ->constrained('employment_types')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['suffix', 'birth_date', 'gender', 'civil_status', 'naturality', 'religion', 'contact_number', 'employment_type_id']);
            $table->dropForeign('employment_type_id');
        });
    }
};
