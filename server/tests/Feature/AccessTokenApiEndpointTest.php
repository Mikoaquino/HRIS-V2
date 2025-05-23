<?php

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->password = Str::password();

    $this->user = User::factory()->create(['password' => $this->password]);

    $this->requestPayload = [
        'email'    => $this->user->email,
        'password' => $this->password,
    ];
});

test('`POST:` Generate an access token', function () {
    $response = $this->postJson('/api/v1/auth/login', $this->requestPayload);

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
    $response = $this->postJson('/api/v1/auth/login', $this->requestPayload)->assertCreated();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$response->getData()->data->token,
    ])->postJson('/api/v1/auth/logout');

    $response->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('auth.tokens.deleted'),
            'status'  => Response::HTTP_OK,
        ]);
});
