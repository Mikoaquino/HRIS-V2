<?php

namespace Database\Factories;

use App\Models\Barangay;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeePresentAddress>
 */
class EmployeePresentAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'barangay_id' => Barangay::inRandomOrder()->first(),
            'additional_details' => fake()->streetAddress(),
            'zip_code' => fake()->numerify('####'),
        ];
    }
}
