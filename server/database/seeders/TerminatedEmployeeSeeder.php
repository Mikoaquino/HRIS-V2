<?php

namespace Database\Seeders;

use App\Models\EmployeeLifecycle;
use App\Models\TerminatedEmployee;
use Illuminate\Database\Seeder;

class TerminatedEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $separatedEmployees = EmployeeLifecycle::whereNotNull('separated_at')->get();

        $ids = $separatedEmployees->pluck('employee_id');

        $count = intval(floor($ids->count() / 2));
        
        for ($i = 0; $i < $count; $i++) {
            TerminatedEmployee::factory()->create([
                'employee_id' => $ids->shift()
            ]);
        }
    }
}
