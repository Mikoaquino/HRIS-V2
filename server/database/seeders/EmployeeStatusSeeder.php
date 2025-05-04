<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeStatus;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Active', 'Resigned', 'Terminated'];

        foreach ($statuses as $status) {
            EmployeeStatus::create([
                'name' => $status,
                'description' => fake()->paragraph(),
            ]);
        }
    }
}
