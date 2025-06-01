<?php

use App\Models\Barangay;
use App\Models\Employee;
use App\Models\EmployeePermanentAddress;
use App\Models\EmployeePresentAddress;
use App\Services\EmployeeAddressService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(EmployeeAddressService::class));

test('can create an employee\'s present address', function () {
    $validated = [
        'employee_id'        => Employee::factory()->create()->id,
        'barangay_code'      => Barangay::inRandomOrder()->first()->code,
        'additional_details' => fake()->address(),
        'zip_code'           => fake()->numerify('####'),
    ];

    $presentAddress = $this->service->createPresentAddress($validated);

    $validated = (object) $validated;

    $this->assertDatabaseHas('employee_present_addresses', [
        'employee_id'        => $validated->employee_id,
        'barangay_code'      => $validated->barangay_code,
        'additional_details' => $validated->additional_details,
        'zip_code'           => $validated->zip_code,
    ]);

    expect($presentAddress)
        ->toBeInstanceOf(EmployeePresentAddress::class)
        ->id->toBeInt()
        ->employee_id->toBe($validated->employee_id)
        ->barangay_code->toBe($validated->barangay_code)
        ->zip_code->toBe($validated->zip_code)
        ->created_at->not->toBeNull()
        ->updated_at->not->toBeNull();
});

test('can update an employee\'s present address', function () {
    $presentAddress = EmployeePresentAddress::factory()->create();

    $updateData = [
        'additional_details' => fake()->address(),
        'zip_code'           => fake()->numerify('####'),
    ];

    Carbon::setTestNow(now()->addDay());

    $updatedPresent = $this->service->updatePresentAddress($updateData, $presentAddress);

    $updateData = (object) $updateData;

    $this->assertDatabaseHas('employee_present_addresses', [
        'employee_id'        => $presentAddress->employee_id,
        'barangay_code'      => $presentAddress->barangay_code,
        'additional_details' => $updateData->additional_details,
        'zip_code'           => $updateData->zip_code,
    ]);

    expect($updatedPresent)
        ->toBeInstanceOf(EmployeePresentAddress::class)
        ->id->toBe($presentAddress->id)
        ->additional_details->toBe($updateData->additional_details)
        ->zip_code->toBe($updateData->zip_code);

    expect($updatedPresent->updated_at)->toBeGreaterThan($updatedPresent->created_at);
});

test('can create an employee\'s permanent address', function () {
    $validated = [
        'employee_id'        => Employee::factory()->create()->id,
        'barangay_code'      => Barangay::inRandomOrder()->first()->code,
        'additional_details' => fake()->address(),
        'zip_code'           => fake()->numerify('####'),
    ];

    $permanentAddress = $this->service->createPermanentAddress($validated);

    $validated = (object) $validated;

    $this->assertDatabaseHas('employee_permanent_addresses', [
        'employee_id'        => $validated->employee_id,
        'barangay_code'      => $validated->barangay_code,
        'additional_details' => $validated->additional_details,
        'zip_code'           => $validated->zip_code,
    ]);

    expect($permanentAddress)
        ->toBeInstanceOf(EmployeePermanentAddress::class)
        ->id->toBeInt()
        ->employee_id->toBe($validated->employee_id)
        ->barangay_code->toBe($validated->barangay_code)
        ->zip_code->toBe($validated->zip_code)
        ->created_at->not->toBeNull()
        ->updated_at->not->toBeNull();
});

test('can update an employee\'s permanent address', function () {
    $permanentAddress = EmployeePermanentAddress::factory()->create();

    $updateData = [
        'additional_details' => fake()->address(),
        'zip_code'           => fake()->numerify('####'),
    ];

    Carbon::setTestNow(now()->addDay());

    $updatedPermanent = $this->service->updatePermanentAddress($updateData, $permanentAddress);

    $updateData = (object) $updateData;

    $this->assertDatabaseHas('employee_permanent_addresses', [
        'employee_id'        => $permanentAddress->employee_id,
        'barangay_code'      => $permanentAddress->barangay_code,
        'additional_details' => $updateData->additional_details,
        'zip_code'           => $updateData->zip_code,
    ]);

    expect($updatedPermanent)
        ->toBeInstanceOf(EmployeePermanentAddress::class)
        ->id->toBe($permanentAddress->id)
        ->additional_details->toBe($updateData->additional_details)
        ->zip_code->toBe($updateData->zip_code);

    expect($updatedPermanent->updated_at)->toBeGreaterThan($updatedPermanent->created_at);
});
