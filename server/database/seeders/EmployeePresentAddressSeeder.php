<?php

namespace Database\Seeders;

use App\Models\Barangay;
use App\Models\Employee;
use App\Models\EmployeePresentAddress;
use Illuminate\Database\Seeder;

class EmployeePresentAddressSeeder extends Seeder
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

        EmployeePresentAddress::insert($data->toArray());
    }
}
