<?php

use App\Models\User;
use App\Services\AccessTokenService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(AccessTokenService::class));

test('can generate an access token for a user', function () {
    $user = User::factory()->create(['password' => 'test-password']);

    $response = $this->service->createToken([
        'work_email' => $user->work_email,
        'password'   => 'test-password',
    ]);

    $this->assertDatabaseHas('personal_access_tokens', [
        'tokenable_type' => $user->getMorphClass(),
        'tokenable_id'   => $user->id,
        'name'           => 'access-token',
        'last_used_at'   => null,
        'expires_at'     => null,
    ]);

    expect($response)->toBeObject();
});

test('returns null for work email and password mismatched', function () {
    $user = User::factory()->create(['password' => 'test-password']);

    $response = $this->service->createToken([
        'work_email' => $user->work_email,
        'password'   => 'wrong-password',
    ]);

    expect($response)->toBeNull();
});
