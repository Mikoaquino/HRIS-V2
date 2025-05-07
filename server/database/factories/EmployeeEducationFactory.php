<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeEducation>
 */
class EmployeeEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id'  => Employee::inRandomOrder()->first() ?? Employee::factory(),
            'school'       => fake()->company(),
            'degree'       => fake()->sentence(),
            'graduated_at' => fake()->date(),
        ];
    }
}
