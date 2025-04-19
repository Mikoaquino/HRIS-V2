<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use App\Models\EmployeeAttachment;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreEmployeeAttachmentRequest;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\V1\EmployeeAttachmentCollection;

class EmployeeAttachmentController extends Controller
{
    use HttpResponse;

    public function store(StoreEmployeeAttachmentRequest $request)
    {
        $validated = (object) $request->validated();

        $data = array_map(function ($attachment) use ($validated) {
            $attachment->store('employees');

            return [
                'employee_id' => $validated->employee_id,
                'client_name' => $attachment->getClientOriginalName(),
                'hashed_name' => $attachment->hashName(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }, $validated->attachments);

        EmployeeAttachment::insert($data);

        return $this->success(
            EmployeeAttachmentCollection::make(EmployeeAttachment::hydrate($data)),
            __('response.attachment.upload.success'),
            Response::HTTP_CREATED
        );
    }

    public function show(EmployeeAttachment $attachment)
    {
        $content = Storage::get(sprintf("%s/%s", 'employees', $attachment->hashed_name));

        if (! $content) {
            return $this->error(
                message: __('response.error.show', ['resource' => $attachment->client_name]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return response($content, Response::HTTP_FOUND, [
            'Content-Type' => Storage::mimeType($content),
        ]);
    }

    public function destroy(EmployeeAttachment $attachment)
    {
        if (! $attachment->trashed()) {
            $attachment->delete();

            return $this->success(message: __('response.attachment.delete.temporary.success', [
                'attachment' => $attachment->client_name,
            ]));
        }

        $isDeleted = Storage::delete(sprintf("%s/%s", 'employees', $attachment->hashed_name));

        if (! $isDeleted) {
            return $this->error(message: __('response.attachment.delete.permanent.error', [
                'attachment' => $attachment->client_name
            ]));
        }

        $attachment->forceDelete();

        return $this->success(message: __('response.attachment.delete.permanent.success', [
            'attachment' => $attachment->client_name,
        ]));
    }
}
