<?php

use App\Models\Barangay;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get a paginated resource collection of barangays', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/barangays');

    $response
        ->assertOk()
        ->assertJsonCount(15, 'data')
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

test('`GET:` Get a specific barangay resource', function () {
    $barangay = Barangay::inRandomOrder()->first();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->getJson('/api/v1/barangays/'.$barangay->code);

    $response
        ->assertFound()
        ->assertExactJsonStructure(['status', 'data' => ['code', 'name']])
        ->assertExactJson([
            'status' => Response::HTTP_FOUND,
            'data'   => [
                'code' => $barangay->code,
                'name' => $barangay->name,
            ],
        ]);
});
