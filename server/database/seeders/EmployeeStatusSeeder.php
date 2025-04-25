<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\EmployeeStatus;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Active', 'Inactive', 'Resigned', 'Terminated','On Leave', 'Paid Vacation'];

        $employees = Employee::all();

        foreach ($employees as $employee) {
            EmployeeStatus::create([
                'employee_id' => $employee->id,
                'name' => 'Default Status',
                'status' => $statuses[array_rand($statuses)],
            ]);
        }

        
    }
}
