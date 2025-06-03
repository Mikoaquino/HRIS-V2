<?php

use App\Enums\UserStatus;
use App\Models\Employee;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get a paginated user resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/users');

    $response->assertOk()->assertExactJsonStructure(['data', 'links', 'meta']);

    expect($response->getData()->data)->each()->not()->toHaveKey('deleted_at');
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
        'work_email'  => fake()->email(),
        'employee_id' => Employee::factory()->create()->id,
        'password'    => 'sTr0nk_P4ssword',
        'status'      => UserStatus::ACTIVE->value,
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/users', $requestPayload);

    $request = (object) $requestPayload;

    $response
        ->assertCreated()
        ->assertExactJsonStructure([
            'message',
            'status',
            'data' => [
                'id',
                'work_email',
                'employee_id',
                'status',
                'created_at',
                'updated_at',
            ],
        ])
        ->assertJson([
            'message' => __('response.success.create', ['resource' => 'user']),
            'status'  => Response::HTTP_CREATED,
        ])
        ->assertJsonFragment([
            'work_email'  => $request->work_email,
            'employee_id' => $request->employee_id,
            'status'      => $request->status,
        ]);
});

test('`PATCH:` Update a user resource fields', function () {
    $user = User::factory()->unverified()->create();

    $requestPayload = ['work_email' => 'new.email@gmail.com'];

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
        ->assertJsonPath('data.work_email', $requestPayload['work_email']);
});

test('`PUT:` Replace the entire resource of a user', function () {
    $user = User::factory()->unverified()->create();

    $requestPayload = [
        'work_email'  => 'change.mail2@yahoo.com',
        'employee_id' => Employee::factory()->create()->id,
        'password'    => 'sTr0nk_P4ssword',
        'status'      => 'active',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->putJson('/api/v1/users/'.$user->id, $requestPayload);

    $request = (object) $requestPayload;

    $response
        ->assertOk()
        ->assertExactJsonStructure([
            'message',
            'status',
            'data' => [
                'id',
                'work_email',
                'employee_id',
                'status',
                'created_at',
                'updated_at',
            ],
        ])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'user']),
            'status'  => Response::HTTP_OK,
        ])
        ->assertJsonFragment([
            'work_email'  => $request->work_email,
            'employee_id' => $request->employee_id,
            'status'      => $request->status,
            'created_at'  => $user->created_at,
        ]);
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
