<?php

use App\Models\City;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get the paginated collection of city resource', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/cities');

    $response
        ->assertOk()
        ->assertJsonCount(10, 'data')
        ->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'code',
                    'name',
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

test('`GET:` Get a specific city resource', function () {
    $city = City::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/cities/'.$city->code);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data' => ['code', 'name']])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'code' => $city->code,
                'name' => $city->name,
            ],
        ]);
});

test('`GET:` Include barangays in cities\' resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/cities?load=barangays');

    $response
        ->assertOk()
        ->assertJsonCount(10, 'data')
        ->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'code',
                    'name',
                    'barangays' => [
                        '*' => [
                            'code',
                            'name',
                        ],
                    ],
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

test('`GET:` Include barangays in a specific city resource', function () {
    $city = City::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/cities/'.$city->code.'?load=barangays');

    $response
        ->assertFound()
        ->assertExactJsonStructure([
            'status',
            'data' => [
                'code',
                'name',
                'barangays' => [
                    '*' => [
                        'code',
                        'name',
                    ],
                ],
            ],
        ])
        ->assertJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'code' => $city->code,
                'name' => $city->name,
            ],
        ]);
});
