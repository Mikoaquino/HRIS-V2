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
        $from = fake()->dateTimeBetween('-10 years', '-3 years');

        return [
            'employee_id'  => Employee::inRandomOrder()->first() ?? Employee::factory(),
            'school'       => fake()->company(),
            'degree'       => fake()->sentence(),
            'from'         => $from->format('Y-m'),
            'to'           => fake()->optional()->dateTimeBetween($from)?->format('Y-m'),
        ];
    }
}
