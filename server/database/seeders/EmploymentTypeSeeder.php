<?php

namespace Database\Seeders;

use App\Models\EmploymentType;
use Illuminate\Database\Seeder;

class EmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            'Full-time',
            'Part-time',
            'Contract',
            'Internship',
        ];
        foreach ($jobs as $job) {
            EmploymentType::create([
                'name'        => $job,
                'description' => fake()->sentence(10),
            ]);
        }
    }
}
