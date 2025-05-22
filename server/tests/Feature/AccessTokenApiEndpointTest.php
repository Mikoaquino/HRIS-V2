<?php

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

test('`POST:` Generate an access token', function () {
    $password = Str::password();

    $user = User::factory()->create(['password' => $password]);

    $requestPayload = [
        'email'    => $user->email,
        'password' => $password,
    ];

    $response = $this->postJson('/api/v1/auth/login', $requestPayload);

    $response->assertCreated()
        ->assertJsonStructure([
            'status',
            'data' => [
                'token',
                'user' => ['employee'],
            ],
        ])
        ->assertJson(['status' => Response::HTTP_CREATED]);
});

test('`POST:` Revoke access tokens', function () {
    $token = User::factory()->create()->createToken('access-token')->plainTextToken;

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$token,
    ])->postJson('/api/v1/auth/logout');

    $response->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('auth.tokens.deleted'),
            'status'  => Response::HTTP_OK,
        ]);
});
