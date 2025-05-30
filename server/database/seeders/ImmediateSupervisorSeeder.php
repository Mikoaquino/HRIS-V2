<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\JobPosition;
use Illuminate\Database\Seeder;

class ImmediateSupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supervisor = JobPosition::firstWhere('name', 'Supervisor');

        Employee::query()
            ->withTrashed()
            ->with('jobPosition')
            ->get()
            ->each(function ($employee) use ($supervisor) {
                if ($employee->jobPosition->isNot($supervisor)) {
                    $employee->update([
                        'immediate_supervisor_id' => Employee::inRandomOrder()->first()->id
                    ]);
                }
            });
    }
}
