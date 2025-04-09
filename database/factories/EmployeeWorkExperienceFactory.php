<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeWorkExperience>
 */
class EmployeeWorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::inRandomOrder()->first(),
            'previous_employer' => fake()->company(),
            'job_position' => fake()->jobTitle(),
            'from' => fake()->dateTimeBetween('-6 years', '-1 year'),
            'to' => fake()->dateTimeBetween('-10 months', '-3 months'),
            'reason_for_leaving' => fake()->paragraph(),
        ];
    }
}
