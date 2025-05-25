<?php

use App\Models\Employee;
use App\Services\EmployeeWorkExperienceService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(EmployeeWorkExperienceService::class));

test('can create multiple employee work experience', function () {
    $employee = Employee::factory()->create();

    $validated = ['employee_id'  => $employee->id];

    $workExpCount = 5;

    for ($i = 0; $i < $workExpCount; $i++) {
        $validated['work_experiences'][] = [
            'previous_employer'  => fake()->company(),
            'job_position'       => fake()->sentence(),
            'from'               => fake()->date(),
            'to'                 => fake()->date(),
            'reason_for_leaving' => fake()->sentence(),
        ];
    }

    $this->service->createWorkExperiences($validated);

    expect($employee->workExperiences->count())->toBe($workExpCount);

    foreach ($validated['work_experiences'] as $workExp) {
        $this->assertDatabaseHas('employee_work_experiences', [
            'employee_id'        => $validated['employee_id'],
            'previous_employer'  => $workExp['previous_employer'],
            'job_position'       => $workExp['job_position'],
            'from'               => $workExp['from'],
            'to'                 => $workExp['to'],
            'reason_for_leaving' => $workExp['reason_for_leaving'],
        ]);
    }
});

test('can simultaneously update existing and add multiple employee work experience', function () {
    //
})->todo();
