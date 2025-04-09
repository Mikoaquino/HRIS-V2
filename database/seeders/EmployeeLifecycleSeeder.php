<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeLifecycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        Employee::all()->each(function ($employee) use (&$data) {
            $dateHired = fake()->dateTimeBetween('-5 years', '-1 years');

            $data[] = [
                'employee_id' => $employee->id,
                'hired_at' => $dateHired,
                'separated_at' => fake()->optional()->dateTimeBetween('-10 months', '-3 months'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        });

        DB::transaction(fn () => DB::table('employee_lifecycles')->insert($data));
    }
}
