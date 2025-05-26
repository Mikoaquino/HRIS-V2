<?php

use App\Models\Province;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get the resource collection of all provinces', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/provinces');

    $response
        ->assertOk()
        ->assertJsonCount(Province::count(), 'data')
        ->assertExactJsonStructure([
            'status',
            'data' => [
                '*' => [
                    'code',
                    'name',
                ],
            ],
        ])
        ->assertJson(['status' => Response::HTTP_OK]);
});

test('`GET:` Get a specific province resource', function () {
    $province = Province::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/provinces/'.$province->code);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data' => ['code', 'name']])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'code' => $province->code,
                'name' => $province->name,
            ],
        ]);
});

// very expensive test :/
test('`GET:` Include cities in provinces\' resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/provinces?load=cities');

    $response
        ->assertOk()
        ->assertExactJsonStructure([
            'status',
            'data' => [
                '*' => [
                    'code',
                    'name',
                    'cities' => [
                        '*' => [
                            'code',
                            'name',
                        ],
                    ],
                ],
            ],
        ])
        ->assertJson(['status' => Response::HTTP_OK]);
});

test('`GET:` Include cities in a specific province resource', function () {
    $province = Province::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/provinces/'.$province->code.'?load=cities');

    $response
        ->assertFound()
        ->assertExactJsonStructure([
            'status',
            'data' => [
                'code',
                'name',
                'cities' => [
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
                'code' => $province->code,
                'name' => $province->name,
            ],
        ]);
});
