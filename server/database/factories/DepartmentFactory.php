<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->unique()->randomElement([
            'Human Resources',
            'Marketing',
            'Finance',
            'Sales',
            'Engineering',
        ]);

        $description = match ($name) {
            'Human Resources' => 'Responsible for overseeing the recruitment, training, and development of employees.',
            'Marketing'       => 'Manages the marketing strategy, campaigns, and customer engagement.',
            'Finance'         => 'Handles the financial planning, reporting, and budgeting for the company.',
            'Sales'           => 'Directs and manages sales efforts to increase revenue and expand customer base.',
            'Engineering'     => 'Designs, develops, and maintains the company’s software products and services.',
            default           => 'Department description goes here.',
        };

        return [
            'name'        => $name,
            'description' => $description,
            'company_id'      => Company::inRandomOrder()->first(),
        ];
    }
}
