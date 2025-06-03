<?php

namespace Database\Factories;

use App\Enums\CivilStatus;
use App\Enums\Gender;
use App\Models\Department;
use App\Models\EmployeeStatus;
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
            'personal_email'          => fake()->unique()->safeEmail(),
            'first_name'              => fake()->firstName(),
            'middle_name'             => fake()->optional()->firstName(),
            'last_name'               => fake()->lastName(),
            'suffix'                  => fake()->optional()->randomElement(['Jr.', 'Sr.']),
            'gender'                  => fake()->randomElement(Gender::cases()),
            'birth_date'              => fake()->date(),
            'birth_place'             => fake()->address(),
            'civil_status'            => fake()->randomElement(CivilStatus::cases()),
            'citizenship'             => fake()->randomElement(['American', 'Filipino', 'Hispanic']),
            'nationality'             => fake()->country(),
            'religion'                => fake()->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism']),
            'contact_number'          => fake()->regexify('09\d{9}'),
            'sss_id'                  => fake()->numerify('###########'),
            'tin_id'                  => fake()->numerify('###########'),
            'philhealth_id'           => fake()->numerify('###########'),
            'pagibig_id'              => fake()->numerify('###########'),
            'employment_type_id'      => EmploymentType::inRandomOrder()->first(),
            'job_position_id'         => JobPosition::inRandomOrder()->first(),
            'employee_status_id'      => EmployeeStatus::inRandomOrder()->first(),
            'department_id'           => Department::inRandomOrder()->first(),
            'immediate_supervisor_id' => null,
            'archived_at'             => fake()->optional()->date(time()),
        ];
    }
}
