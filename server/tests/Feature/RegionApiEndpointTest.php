<?php

use App\Models\Region;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get the resource collection of all regions', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions');

    $response
        ->assertOk()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertJson(['status' => Response::HTTP_OK]);

    expect($response->getData()->data)
        ->toHaveCount(Region::count())
        ->each()->toHaveKeys(['code', 'name']);
});

test('`GET:` Get a specific region resource', function () {
    $region = Region::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions/'.$region->code);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'code' => $region->code,
                'name' => $region->name,
            ],
        ]);
});

test('`GET:` Include provinces in regions\' resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions?load=provinces');

    $response
        ->assertOk()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertJson(['status' => Response::HTTP_OK]);

    expect($response->getData()->data)->each()->toHaveKeys(['code', 'name', 'provinces']);
});

test('`GET:` Include cities in regions\' resource collection', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions?load=cities');

    $response
        ->assertOk()
        ->assertExactJsonStructure(['status', 'data'])
        ->assertJson(['status' => Response::HTTP_OK]);

    expect($response->getData()->data)->each()->toHaveKeys(['code', 'name', 'cities']);
});

test('`GET:` Include provinces in a specific region resource', function () {
    $region = Region::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions/'.$region->code.'?load=provinces');

    $response
        ->assertFound()
        ->assertExactJsonStructure([
            'status',
            'data' => [
                'code',
                'name',
                'provinces' => [
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
                'code' => $region->code,
                'name' => $region->name,
            ],
        ]);
});

test('`GET:` Include cities in a specific region resource', function () {
    $region = Region::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->get('/api/v1/regions/'.$region->code.'?load=cities');

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
                'code' => $region->code,
                'name' => $region->name,
            ],
        ]);
});
