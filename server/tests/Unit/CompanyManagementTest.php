<?php

use App\Models\Company;
use App\Services\CompanyService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(CompanyService::class));

test('can create a new company', function () {
    $validated = [
        'name'           => fake()->company(),
        'type'           => 'Partnership',
        'address'        => fake()->address(),
        'contact_number' => fake()->numerify('09#########'),
    ];

    $response = $this->service->createCompany($validated);

    $this->assertDatabaseHas('companies', $validated);

    $validated = (object) $validated;

    expect($response)
        ->toBeInstanceOf(Company::class)
        ->id->toBeInt()
        ->name->toBe($validated->name)
        ->type->toBe($validated->type)
        ->address->toBe($validated->address)
        ->contact_number->toBe($validated->contact_number)
        ->created_at->not->toBeNull()
        ->updated_at->not->toBeNull();
});

test('can update a company information', function () {
    $company = Company::factory()->create();

    $updateData = [
        'name' => 'Holocron Tracker Trading',
        'type' => 'Sole Proprietorship',
    ];

    Carbon::setTestNow(now()->addDay());

    $response = $this->service->updateCompany($updateData, $company);

    $data = (object) $updateData;

    $this->assertDatabaseHas('companies', [
        'id'             => $company->id,
        'name'           => $data->name,
        'type'           => $data->type,
        'address'        => $company->address,
        'contact_number' => $company->contact_number,
    ]);

    expect($response)
        ->toBeInstanceOf(Company::class)
        ->id->toBe($company->id)
        ->name->toBe($data->name)
        ->type->toBe($data->type)
        ->address->toBe($company->address)
        ->contact_number->toBe($company->contact_number);

    expect($response->updated_at)->toBeGreaterThan($response->created_at);
});

test('can soft-delete a company model', function () {
    $company = Company::factory()->create();

    $response = $this->service->handleCompanyDelete($company);

    $this->assertSoftDeleted($company);

    expect($response)
        ->toBeInstanceOf(Company::class)
        ->exists->toBeTrue()
        ->deleted_at->not->toBeNull();
});

test('can force delete a company model', function () {
    $company = Company::factory()->softDeleted()->create();

    $this->assertSoftDeleted($company);

    $response = $this->service->handleCompanyDelete($company);

    $this->assertModelMissing($company);

    expect($response)
        ->toBeInstanceOf(Company::class)
        ->exists->toBeFalse();
});
