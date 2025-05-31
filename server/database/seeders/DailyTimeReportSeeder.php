<?php

namespace Database\Seeders;

use App\Models\DailyTimeReport;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DailyTimeReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Employee::all()->map(fn ($employee) => [
            'employee_id' => $employee->id,
            'date_time'   => fake()->dateTime(),
            'created_at'  => now(),
            'updated_at'  => now(),
        ])->toArray();

        DailyTimeReport::insert($data);
    }
}
