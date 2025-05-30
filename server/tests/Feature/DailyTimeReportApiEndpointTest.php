<?php

use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\Response;

test('`GET:` Get a paginated resource collection of DTR', function () {
    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token
    ])->getJson('/api/v1/dtrs');

    $response
        ->assertOk()
        ->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'employee_id',
                    'date',
                    'time',
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

test('`POST:` Import a dtr of .txt file', function () {
    $raw = [
        "1\t2024-12-21 04:55:29\t0\t1\t0\t0",
        "2\t2024-12-21 04:55:31\t0\t1\t0\t0",
        "3\t2024-12-21 05:11:41\t0\t1\t1\t0",
        "4\t2024-12-21 05:24:48\t0\t2\t1\t0",
        "5\t2024-12-21 05:31:08\t0\t2\t1\t0",
        "6\t2024-12-21 05:31:10\t0\t2\t1\t0",
        "7\t2024-12-21 05:32:05\t0\t1\t1\t0",
        "8\t2024-12-21 05:36:36\t0\t1\t1\t0",
        "9\t2024-12-21 05:36:38\t0\t1\t1\t0",
        "10\t2024-12-21 05:42:09\t0\t1\t1\t0",
    ];

    $logs = implode(PHP_EOL, $raw);

    $dtrFile = UploadedFile::fake()->createWithContent('dtr.txt', $logs);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token
    ])->post('/api/v1/dtrs', ['dtr' => $dtrFile]);

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.dtr_import.success'),
            'status' => Response::HTTP_CREATED
        ]);
});

test('`POST:` Import an empty .txt file', function () {
    $dtrFile = UploadedFile::fake()->create('dtr.txt');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token
    ])->post('/api/v1/dtrs', ['dtr' => $dtrFile]);

    $response
        ->assertBadRequest()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertExactJson([
            'message' => __('response.dtr_import.error'),
            'status' => Response::HTTP_BAD_REQUEST
        ]);
});
