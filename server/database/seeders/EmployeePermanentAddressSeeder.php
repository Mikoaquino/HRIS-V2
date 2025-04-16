<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use App\Models\EmployeePermanentAddress;

class EmployeePermanentAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Employee::all()->map(fn ($employee) => [
            'employee_id' => $employee->id,
            'barangay_id' => Barangay::inRandomOrder()->first()->id,
            'additional_details' => fake()->streetAddress(),
            'zip_code' => fake()->numerify('####'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        EmployeePermanentAddress::insert($data->toArray());
    }
}
