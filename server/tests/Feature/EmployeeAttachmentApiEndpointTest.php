<?php

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\Response;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->token = $this->user->createToken('access-token')->plainTextToken;
});

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
        ]);
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

    $response->assertCreated();
})->wip();

test('`GET:` Render the file and its contents', function () {
    //
})->todo();

test('`DELETE:` Flag a file resource as deleted', function () {
    //
})->todo();

test('`DELETE:` Permanently delete a file in the local disk', function () {
    //
})->todo();
