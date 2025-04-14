<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeWorkExperience;
use Illuminate\Database\Seeder;

class EmployeeWorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::all()->each(function ($employee) {
            EmployeeWorkExperience::factory()->create([
                'employee_id' => $employee->id
            ]);
        });
    }
}
