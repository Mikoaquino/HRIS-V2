<?php

use App\Models\Company;
use App\Models\Department;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get a paginated resource of department collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/departments');

    $response
        ->assertOk()
        ->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'description',
                    'company_id',
                ],
            ],
            'links' => [
                'first',
                'last',
                'prev',
                'next',
            ],
            'meta' => [
                'current_page',
                'from',
                'last_page',
                'links' => [
                    '*' => [
                        'url',
                        'label',
                        'active',
                    ],
                ],
                'path',
                'per_page',
                'to',
                'total',
            ],
        ]);
});

test('`GET:` Get a specific department resource', function () {
    $department = Department::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/departments/'.$department->id);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'id'          => $department->id,
                'name'        => $department->name,
                'description' => $department->description,
                'company_id'  => $department->company_id,
            ],
        ]);
});

test('`POST:` Create a new department resource', function () {
    $requestPayload = [
        'name'        => 'Business Administration',
        'description' => fake()->sentence(),
        'company_id'  => Company::factory()->create()->id,
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/departments', $requestPayload);

    $request = (object) $requestPayload;

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.department.success_create', [
                'department' => $request->name,
            ]),
            'status'  => Response::HTTP_CREATED,
            'data'    => [
                'name'        => $request->name,
                'description' => $request->description,
                'company_id'  => $request->company_id,
            ],
        ]);
});

test('`PUT:` Replace the entire resource of a department', function () {
    $department = Department::factory()->create();

    $updateData = [
        'name'        => 'Operations Management',
        'description' => fake()->sentence(),
        'company_id'  => Company::factory()->create()->id,
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->putJson('/api/v1/departments/'.$department->id, $updateData);

    $updateData = (object) $updateData;

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertExactJson([
            'message' => __('response.department.success_update', [
                'department' => $updateData->name,
            ]),
            'status' => Response::HTTP_OK,
            'data'   => [
                'id'          => $department->id,
                'name'        => $updateData->name,
                'description' => $updateData->description,
                'company_id'  => $updateData->company_id,
            ],
        ]);
});

test('`PATCH:` Update a department resource fields', function () {
    $department = Department::factory()->create(['name' => 'Ops and Safety']);

    $updateData = ['name' => 'Research and Development'];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->patchJson('/api/v1/departments/'.$department->id, $updateData);

    $updateData = (object) $updateData;

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertExactJson([
            'message' => __('response.department.success_update', [
                'department' => $updateData->name,
            ]),
            'status' => Response::HTTP_OK,
            'data'   => [
                'id'          => $department->id,
                'name'        => $updateData->name,
                'description' => $department->description,
                'company_id'  => $department->company_id,
            ],
        ]);
});

test('`DELETE:` Flag a department resource as archived', function () {
    $department = Department::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/departments/'.$department->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.department.delete.temporary', [
                'department' => $department->name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});

test('`DELETE:` Force delete a department resource', function () {
    $archivedDepartment = Department::factory()->archived()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/departments/'.$archivedDepartment->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.department.delete.permanent', [
                'department' => $archivedDepartment->name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});
