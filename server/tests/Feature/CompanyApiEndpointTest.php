<?php

use App\Models\Company;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get a paginated resource of company collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/companies');

    $response
        ->assertOk()
        ->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'type',
                    'address',
                    'contact_number',
                    'created_at',
                    'updated_at',
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

test('`GET:` Get a specific company resource', function () {
    $company = Company::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/companies/'.$company->id);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'id'             => $company->id,
                'name'           => $company->name,
                'type'           => $company->type,
                'address'        => $company->address,
                'contact_number' => $company->contact_number,
                'created_at'     => $company->created_at,
                'updated_at'     => $company->updated_at,
            ],
        ]);
});

test('`POST:` Create a new company resource', function () {
    $requestPayload = [
        'name'           => 'Kangkong ni Josh Mojica',
        'type'           => 'Sole Proprietorship',
        'address'        => 'Kangkungan ni Juswa, Ortigas Pasig',
        'contact_number' => '09311758835',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/companies', $requestPayload);

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.success.create', ['resource' => 'company']),
            'status'  => Response::HTTP_CREATED,
            'data'    => [
                'name'           => $requestPayload['name'],
                'type'           => $requestPayload['type'],
                'address'        => $requestPayload['address'],
                'contact_number' => $requestPayload['contact_number'],
            ],
        ]);
});

test('`PUT:` Replace the entire resource of a company', function () {
    $company = Company::factory()->create();

    $requestPayload = [
        'name'           => 'Holocron Tracker Trading',
        'type'           => 'Partnership',
        'address'        => '4/F ATI Building, #5 Ideal St. Corner McCollough St., Brgy. Addition Hills, Mandaluyong City',
        'contact_number' => '09300768434',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->putJson('/api/v1/companies/'.$company->id, $requestPayload);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'company']),
            'status'  => Response::HTTP_OK,
            'data'    => [
                'id'             => $company->id,
                'name'           => $requestPayload['name'],
                'type'           => $requestPayload['type'],
                'contact_number' => $requestPayload['contact_number'],
            ],
        ]);
});

test('`PATCH:` Update company resource fields', function () {
    $company = Company::factory()->create();

    $requestPayload = [
        'name'           => 'Holocron Web Services',
        'contact_number' => '09557301880',
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->patchJson('/api/v1/companies/'.$company->id, $requestPayload);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.success.update', ['resource' => 'company']),
            'status'  => Response::HTTP_OK,
            'data'    => [
                'id'             => $company->id,
                'name'           => $requestPayload['name'],
                'type'           => $company->type,
                'contact_number' => $requestPayload['contact_number'],
            ],
        ]);
});

test('`DELETE:` Flag a company resource as deleted', function () {
    $company = Company::factory()->create();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/companies/'.$company->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.company.delete.temporary', [
                'company' => $company->name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});

test('`DELETE:` Force delete a company resource', function () {
    $company = Company::factory()->create(['deleted_at' => now()]);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/companies/'.$company->id);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.company.delete.permanent', [
                'company' => $company->name,
            ]),
            'status' => Response::HTTP_OK,
        ]);
});
