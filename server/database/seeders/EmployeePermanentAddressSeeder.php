<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Employee;
use App\Models\EmployeePermanentAddress;
use Illuminate\Database\Seeder;

class EmployeePermanentAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Employee::all()->map(fn ($employee) => [
            'employee_id'        => $employee->id,
            'barangay_code'      => Barangay::inRandomOrder()->first()->code,
            'additional_details' => fake()->streetAddress(),
            'zip_code'           => fake()->numerify('####'),
            'created_at'         => now(),
            'updated_at'         => now(),
        ]);

        EmployeePermanentAddress::insert($data->toArray());
    }
}
