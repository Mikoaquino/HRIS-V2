<?php

use App\Models\Employee;
use App\Models\EmployeeAttachment;
use App\Services\EmployeeAttachmentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(fn () => $this->service = app()->make(EmployeeAttachmentService::class));

test('can upload multiple attachments in the local disk', function () {
    $employee = Employee::factory()->create();

    $validated = ['employee_id' => $employee->id];

    $attachmentCount = 15;

    for ($i = 1; $i <= $attachmentCount; $i++) {
        $validated['attachments'][] = UploadedFile::fake()->create("document-$i.pdf");
    }

    $this->service->handleUploads($validated);

    $hashedAttachments = array_map(fn ($attachment) => 'employees/'.$attachment->hashName(), $validated['attachments']);

    Storage::disk('local')->assertExists($hashedAttachments);

    Storage::disk('local')->delete($hashedAttachments);

    foreach ($validated['attachments'] as $attachment) {
        $this->assertDatabaseHas('employee_attachments', [
            'employee_id' => $validated['employee_id'],
            'client_name' => $attachment->getClientOriginalName(),
            'hashed_name' => $attachment->hashName(),
        ]);
    }
});

test('can get attachment\'s content from the local disk', function () {
    $attachmentContent = 'Sample test content';

    $attachment = UploadedFile::fake()->createWithContent('document.pdf', $attachmentContent);

    $attachment->store('employees');

    $hashedAttachment = 'employees/'.$attachment->hashName();

    $attachmentModel = EmployeeAttachment::create([
        'employee_id' => Employee::factory()->create()->id,
        'client_name' => $attachment->getClientOriginalName(),
        'hashed_name' => $attachment->hashName(),
    ]);

    Storage::disk('local')->assertExists($hashedAttachment);

    $content = $this->service->getAttachment($attachmentModel);

    $this->assertSame($attachmentContent, $content);

    Storage::disk('local')->delete($hashedAttachment);
});

test('can soft-delete attachment model', function () {
    $attachment = UploadedFile::fake()->create('document.pdf');

    $attachment->store('employees');

    $hashedAttachment = 'employees/'.$attachment->hashName();

    $attachmentModel = EmployeeAttachment::create([
        'employee_id' => Employee::factory()->create()->id,
        'client_name' => $attachment->getClientOriginalName(),
        'hashed_name' => $attachment->hashName(),
    ]);

    $this->service->handleDelete($attachmentModel);

    Storage::disk('local')->assertExists($hashedAttachment);

    $this->assertModelExists($attachmentModel);
    $this->assertSoftDeleted($attachmentModel);

    Storage::disk('local')->delete($hashedAttachment);
});

test('can force delete attachment from database and local disk', function () {
    $attachment = UploadedFile::fake()->create('document.pdf');

    $attachment->store('employees');

    $attachmentModel = EmployeeAttachment::create([
        'employee_id' => Employee::factory()->create()->id,
        'client_name' => $attachment->getClientOriginalName(),
        'hashed_name' => $attachment->hashName(),
    ]);

    $attachmentModel->delete();

    $this->service->handleDelete($attachmentModel);

    Storage::disk('local')->assertMissing('employees/'.$attachment->hashName());

    $this->assertModelMissing($attachmentModel);
});
