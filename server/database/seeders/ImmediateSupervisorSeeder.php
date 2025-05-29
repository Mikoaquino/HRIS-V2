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

        $supervisors = Employee::where('job_position_id', $supervisor->id)->get();

        Employee::query()
            ->withTrashed()
            ->with('jobPosition')
            ->get()
            ->each(function ($employee) use ($supervisor, $supervisors) {
                if ($employee->jobPosition->isNot($supervisor)) {
                    $employee->update(['immediate_supervisor_id' => $supervisors->random()->id]);
                }
            });
    }
}
