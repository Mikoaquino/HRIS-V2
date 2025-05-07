<?php

namespace Database\Factories;

use App\Enums\CivilStatus;
use App\Enums\Gender;
use App\Models\EmploymentType;
use App\Models\JobPosition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'         => fake()->firstName(),
            'middle_name'        => fake()->optional()->firstName(),
            'last_name'          => fake()->lastName(),
            'suffix'             => fake()->optional()->randomElement(['Jr.', 'Sr.']),
            'gender'             => fake()->randomElement(Gender::cases()),
            'birth_date'         => fake()->date(),
            'civil_status'       => fake()->randomElement(CivilStatus::cases()),
            'nationality'        => fake()->country(),
            'religion'           => fake()->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism']),
            'contact_number'     => $this->faker->regexify('09\d{9}'),
            'sss_id'             => fake()->numerify('###########'),
            'tin_id'             => fake()->numerify('###########'),
            'philhealth_id'      => fake()->numerify('###########'),
            'pagibig_id'         => fake()->numerify('###########'),
            'employment_type_id' => EmploymentType::inRandomOrder()->first(),
            'job_position_id'    => JobPosition::inRandomOrder()->first(),
        ];
    }
}
