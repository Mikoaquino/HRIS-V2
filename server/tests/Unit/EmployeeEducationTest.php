<?php

use App\Models\Employee;
use App\Services\EmployeeEducationService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(EmployeeEducationService::class));

test('can create multiple employee education', function () {
    $employee = Employee::factory()->create();

    $validated = ['employee_id'  => $employee->id];

    for ($i = 0; $i < 5; $i++) {
        $validated['educations'][] = [
            'school'       => fake()->company(),
            'degree'       => fake()->sentence(),
            'graduated_at' => fake()->date(),
        ];
    }

    $this->service->createEducation($validated);

    foreach ($validated['educations'] as $education) {
        $this->assertDatabaseHas('employee_educations', [
            'employee_id'  => $validated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
        ]);
    }
});

test('can simultaneously update existing and add multiple employee education', function () {
    $employee = Employee::factory()->create();

    for ($i = 0; $i < 3; $i++) {
        $validated[] = [
            'employee_id'  => $employee->id,
            'school'       => fake()->company(),
            'degree'       => fake()->sentence(),
            'graduated_at' => fake()->date(),
        ];
    }

    $educationCollection = $employee->educations()->createMany($validated);

    $updatedValidated['educations'] = $educationCollection->map(fn ($education) => [
        'id'           => $education->id,
        'school'       => fake()->company(),
        'degree'       => fake()->sentence(),
        'graduated_at' => fake()->date(),
    ])->toArray();

    $updatedValidated['employee_id'] = $employee->id;

    for ($i = 0; $i < 2; $i++) {
        $updatedValidated['educations'][] = [
            'school'       => fake()->company(),
            'degree'       => fake()->sentence(),
            'graduated_at' => fake()->date(),
        ];
    }

    $this->service->updateEducation($updatedValidated);

    expect($employee->educations->count())->toBe(5);

    foreach ($updatedValidated['educations'] as $education) {
        $this->assertDatabaseHas('employee_educations', [
            'employee_id'  => $updatedValidated['employee_id'],
            'school'       => $education['school'],
            'degree'       => $education['degree'],
            'graduated_at' => $education['graduated_at'],
        ]);
    }
});
