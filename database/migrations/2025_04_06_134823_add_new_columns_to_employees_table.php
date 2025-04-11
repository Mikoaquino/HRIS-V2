<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('suffix');
            $table->dropColumn('birth_date');
            $table->dropColumn('gender');
            $table->dropColumn('civil_status');
            $table->dropColumn('nationality');
            $table->dropColumn('religion');
            $table->dropColumn('contact_number');
        });
    }
};
