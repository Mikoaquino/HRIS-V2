<?php

use App\Models\Employee;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->token = $this->user->createToken('access-token')->plainTextToken;
});

test('`GET:` Get a paginated user resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/users');

    $response->assertOk()->assertExactJsonStructure(['data', 'links', 'meta']);

    foreach ($response->getData()->data as $data) {
        expect($data)->not()->toHaveKey('deleted_at');
    }
});

test('`GET:` Get a specific user resource', function () {
    $user = User::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/users/'.$user->id);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['data', 'status'])
        ->assertJsonPath('data.id', $user->id);
});

test('`GET:` Include soft-deleted users in paginated resource collection', function () {
    $user = User::factory()->create([
        'created_at'  => now()->addMinute(),
        'deleted_at'  => now(),
    ]);

    $requestQuery = '?with_trashed=true&sort[created_at]=desc&per_page='.User::withTrashed()->count();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/users'.$requestQuery);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['data', 'links', 'meta'])
        ->assertJsonPath('data.0', fn ($data) => $data['id'] === $user->id);
});

test('`GET:` Get only soft-deleted users in paginated resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/users?only_trashed=true');

    $response->assertOk()->assertExactJsonStructure(['data', 'links', 'meta']);

    foreach ($response->getData()->data as $data) {
        expect($data)->toHaveKey('deleted_at');
    }
});

test('`POST:` Create a new user resource', function () {
    $requestPayload = [
        'email'       => 'sample.mail@yahoo.com',
        'employee_id' => Employee::factory()->create()->id,
        'password'    => 'sTr0nk_P4ssword',
        'status'      => 'active',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/users', $requestPayload);

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.success.create', ['resource' => 'user']),
            'status'  => Response::HTTP_CREATED,
        ])
        ->assertJsonFragment([
            'email'       => $requestPayload['email'],
            'employee_id' => $requestPayload['employee_id'],
            'status'      => $requestPayload['status'],
        ]);
});

test('`PATCH:` Update a user resource fields', function () {
    $user = User::factory()->create();

    $requestPayload = ['email' => 'new.email@gmail.com'];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->patchJson('/api/v1/users/'.$user->id, $requestPayload);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'data', 'status'])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'user']),
            'status'  => Response::HTTP_OK,
        ])
        ->assertJsonPath('data.email', $requestPayload['email']);
});

test('`PUT:` Replace the entire resource of a user', function () {
    $user = User::factory()->create();

    $requestPayload = [
        'email'       => 'change.mail2@yahoo.com',
        'employee_id' => Employee::factory()->create()->id,
        'password'    => 'sTr0nk_P4ssword',
        'status'      => 'active',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->putJson('/api/v1/users/'.$user->id, $requestPayload);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'data', 'status'])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'user']),
            'status'  => Response::HTTP_OK,
        ])
        ->assertJson(
            fn (AssertableJson $json) => $json->has('data',
                fn (AssertableJson $json) => $json->where('email', $requestPayload['email'])
                    ->where('employee_id', $requestPayload['employee_id'])
                    ->where('status', $requestPayload['status'])
                    ->where('created_at', fn ($createdAt) => $createdAt < 'updated_at')
                    ->missingAll(['password', 'deleted_at'])
                    ->etc()
            )->etc()
        );
});

test('`DELETE:` Flag a user resource as deleted', function () {
    $user = User::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/users/'.$user->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.user.delete.temporary', [
                'user' => $user->employee->first_name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});

test('`DELETE:` Force delete a user resource', function () {
    $user = User::factory()->create(['deleted_at' => now()]);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/users/'.$user->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.user.delete.permanent', [
                'user' => $user->employee->first_name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});
