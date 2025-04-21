<?php

namespace Database\Factories;

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
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->randomElement([fake()->firstName(), null]),
            'last_name' => fake()->lastName(),
            'suffix' => $this->faker->numberBetween(0,2) == 1 ? fake()->randomElement(['Jr.', 'Sr.']) : null,
            'gender' => fake()->randomElement(['male', 'female']),
            'birth_date' => fake()->date(),
            'civil_status' => fake()->randomElement(['single', 'married', 'divorced', 'widowed']),
            'nationality' => fake()->country(),
            'religion' => fake()->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism']),
            'contact_number' => $this->faker->regexify('09\d{9}'),
            'employment_type_id' => fake()->randomElement([1, 2, 3, 4]), // Assuming you have employment types with IDs 1 to 4
        ];
    }
}
