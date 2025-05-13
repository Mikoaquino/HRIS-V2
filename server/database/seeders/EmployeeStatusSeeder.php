<?php

namespace Database\Seeders;

use App\Models\EmployeeStatus;
use Illuminate\Database\Seeder;

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
                'name'        => $status,
                'description' => fake()->paragraph(),
            ]);
        }
    }
}
