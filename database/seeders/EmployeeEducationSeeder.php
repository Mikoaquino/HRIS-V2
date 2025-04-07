<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\EmployeeEducation;

class EmployeeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::all()->each(function ($employee) {
            EmployeeEducation::factory()->create([
                'employee_id' => $employee->id
            ]);
        });
    }
}
