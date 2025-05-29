<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->unique()->randomElement([
            'Private Corporation',
            'Public Corporation',
            'Sole Proprietorship',
            'Partnership'
        ]);
        return [
            'name' => fake()->company(),
            'type' => $type,
            'address' => fake()->address(),
            'contact_number' => fake()->numerify('09#########')
        ];
    }
}
