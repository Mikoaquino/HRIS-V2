<?php

use App\Enums\UserStatus;
use App\Models\Employee;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(UserService::class));

test('can create a user model', function () {
    $validated = [
        'work_email'  => fake()->email(),
        'employee_id' => Employee::factory()->create()->id,
        'password'    => Str::password(),
        'status'      => UserStatus::ACTIVE,
    ];

    $user = $this->service->createUser($validated);

    $this->assertModelExists($user);

    expect($user)
        ->toBeInstanceOf(User::class)
        ->id->toBeInt()
        ->work_email->toBe($validated['work_email'])
        ->employee_id->toBe($validated['employee_id'])
        ->password->toHaveLength(60)
        ->status->toBe(UserStatus::ACTIVE)
        ->email_verified_at->toBeNull()
        ->created_at->not->toBeNull()
        ->updated_at->not->toBeNull()
        ->deleted_at->toBeNull();
});

test('can update a user model', function () {
    $user = User::factory()->create(['status' => UserStatus::INACTIVE]);

    $updateData = ['work_email' => fake()->email()];

    Carbon::setTestNow(now()->addDay());

    $updatedUser = $this->service->updateUser($updateData, $user);

    $this->assertModelExists($user);

    expect($updatedUser)
        ->toBeInstanceOf(User::class)
        ->work_email->toBe($updateData['work_email'])
        ->status->toBe(UserStatus::INACTIVE);

    expect($updatedUser->updated_at)->toBeGreaterThan($updatedUser->created_at);
});

test('can soft-delete a user model', function () {
    $user = User::factory()->create(['status' => UserStatus::ACTIVE]);

    $flaggedUser = $this->service->deleteUser($user);

    $this->assertSoftDeleted($user);

    expect($flaggedUser)
        ->toBeInstanceOf(User::class)
        ->exists->toBeTrue()
        ->status->toBe(UserStatus::INACTIVE);
});

test('can force delete a user model', function () {
    $flaggedUser = User::factory()->softDeleted()->create([
        'status' => UserStatus::INACTIVE,
    ]);

    $this->assertSoftDeleted($flaggedUser);

    $deletedUser = $this->service->deleteUser($flaggedUser);

    $this->assertModelMissing($deletedUser);

    expect($deletedUser)
        ->toBeInstanceOf(User::class)
        ->exists->toBeFalse();
});
