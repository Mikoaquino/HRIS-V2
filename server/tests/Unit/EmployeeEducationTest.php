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
        $from = fake()->dateTimeBetween('-10 years', '-3 years');

        $validated['educations'][] = [
            'school' => fake()->company(),
            'degree' => fake()->sentence(),
            'from'   => $from->format('Y-m'),
            'to'     => fake()->optional()->dateTimeBetween($from)?->format('Y-m'),
        ];
    }

    $this->service->createEducation($validated);

    foreach ($validated['educations'] as $education) {
        $this->assertDatabaseHas('employee_educations', [
            'employee_id' => $validated['employee_id'],
            'school'      => $education['school'],
            'degree'      => $education['degree'],
            'from'        => $education['from'],
            'to'          => $education['to'],
        ]);
    }
});

test('can simultaneously update existing and add multiple employee education', function () {
    $employee = Employee::factory()->create();

    for ($i = 0; $i < 3; $i++) {
        $from = fake()->dateTimeBetween('-10 years', '-3 years');

        $validated[] = [
            'employee_id' => $employee->id,
            'school'      => fake()->company(),
            'degree'      => fake()->sentence(),
            'from'        => $from->format('Y-m'),
            'to'          => fake()->optional()->dateTimeBetween($from)?->format('Y-m'),
        ];
    }

    $educationCollection = $employee->educations()->createMany($validated);

    $updateData['educations'] = $educationCollection->map(function ($education) {
        $from = fake()->dateTimeBetween('-9 years', '-2 years');

        return [
            'id'     => $education->id,
            'school' => fake()->company(),
            'degree' => fake()->sentence(),
            'from'   => $from->format('Y-m'),
            'to'     => fake()->optional()->dateTimeBetween($from)?->format('Y-m'),
        ];
    })->toArray();

    $updateData['employee_id'] = $employee->id;

    for ($i = 0; $i < 2; $i++) {
        $from = fake()->dateTimeBetween('-8 years', '-1 year');

        $updateData['educations'][] = [
            'school' => fake()->company(),
            'degree' => fake()->sentence(),
            'from'   => $from->format('Y-m'),
            'to'     => fake()->optional()->dateTimeBetween($from)?->format('Y-m'),
        ];
    }

    $this->service->updateEducation($updateData);

    expect($employee->educations->count())->toBe(5);

    foreach ($updateData['educations'] as $education) {
        $this->assertDatabaseHas('employee_educations', [
            'employee_id' => $updateData['employee_id'],
            'school'      => $education['school'],
            'degree'      => $education['degree'],
            'from'        => $education['from'],
            'to'          => $education['to'],
        ]);
    }
});
