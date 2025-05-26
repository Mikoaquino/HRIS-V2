<?php

use App\Models\Employee;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\Response;

test('`POST:` Save a single file in the local disk', function () {
    $attachment = UploadedFile::fake()->create('document.pdf');

    $requestPayload = [
        'employee_id' => Employee::factory()->create()->id,
        'attachments' => [$attachment],
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/attachments', $requestPayload);

    $hashedAttachment = 'employees/'.$attachment->hashName();

    Storage::disk('local')->assertExists($hashedAttachment);

    Storage::disk('local')->delete($hashedAttachment);

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.attachment.upload.success'),
            'status'  => Response::HTTP_CREATED,
        ])
        ->assertJsonFragment([
            'client_name' => $attachment->getClientOriginalName(),
            'hashed_name' => $attachment->hashName(),
        ])
        ->assertJsonMissingPath('data.0.deleted_at');
});

test('`POST:` Save multiple files in the local disk', function () {
    $attachments = [];

    for ($i = 1; $i < 16; $i++) {
        $attachments[] = UploadedFile::fake()->create("document-$i.pdf");
    }

    $requestPayload = [
        'employee_id' => Employee::factory()->create()->id,
        'attachments' => $attachments,
    ];

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/attachments/', $requestPayload);

    $hashedAttachments = array_map(fn ($attachment) => 'employees/'.$attachment->hashName(), $attachments);

    Storage::disk('local')->assertExists($hashedAttachments);

    Storage::disk('local')->delete($hashedAttachments);

    $response
        ->assertCreated()
        ->assertExactJsonStructure(['message', 'status', 'data'])
        ->assertJson([
            'message' => __('response.attachment.upload.success'),
            'status'  => Response::HTTP_CREATED,
        ]);

    expect($response->getData()->data)
        ->toHaveCount(count($attachments))
        ->each()->not()->toHaveKey('deleted_at');

    foreach ($response->getData()->data as $key => $data) {
        expect($data)->toMatchObject([
            'client_name' => $attachments[$key]->getClientOriginalName(),
            'hashed_name' => $attachments[$key]->hashName(),
        ]);
    }
});

test('`DELETE:` Flag a file resource as deleted', function () {
    $attachment = UploadedFile::fake()->create('document.pdf');

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/attachments', [
        'employee_id' => Employee::factory()->create()->id,
        'attachments' => [$attachment],
    ])->assertCreated();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/attachments/'.$attachment->hashName());

    $hashedAttachment = 'employees/'.$attachment->hashName();

    Storage::disk('local')->assertExists($hashedAttachment);

    Storage::disk('local')->delete($hashedAttachment);

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.attachment.delete.temporary.success', [
                'attachment' => $attachment->getClientOriginalName(),
            ]),
            'status'  => Response::HTTP_OK,
        ]);
});

test('`DELETE:` Permanently delete a file in the local disk', function () {
    $attachment = UploadedFile::fake()->create('document.pdf');

    $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->postJson('/api/v1/attachments', [
        'employee_id' => Employee::factory()->create()->id,
        'attachments' => [$attachment],
    ])->assertCreated();

    $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/attachments/'.$attachment->hashName())
        ->assertOk();

    $response = $this->withHeaders([
        'Authorization' => 'Bearer '.$this->token,
    ])->deleteJson('/api/v1/attachments/'.$attachment->hashName());

    Storage::disk('local')->assertMissing('employees/'.$attachment->hashName());

    $response
        ->assertOk()
        ->assertExactJsonStructure(['message', 'status'])
        ->assertJson([
            'message' => __('response.attachment.delete.permanent.success', [
                'attachment' => $attachment->getClientOriginalName(),
            ]),
            'status'  => Response::HTTP_OK,
        ]);
});
