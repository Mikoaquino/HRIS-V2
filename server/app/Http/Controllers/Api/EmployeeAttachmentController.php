<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeAttachmentRequest;
use App\Http\Resources\EmployeeAttachmentCollection;
use App\Models\EmployeeAttachment;
use App\Services\EmployeeAttachmentService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response as IlluminateHttpResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class EmployeeAttachmentController extends Controller
{
    use HttpResponse;

    public function __construct(protected EmployeeAttachmentService $service) {}

    public function store(StoreEmployeeAttachmentRequest $request): JsonResponse
    {
        $responseData = $this->service->handleUploads($request->validated());

        return $this->success(
            data: EmployeeAttachmentCollection::make($responseData),
            message: __('response.attachment.upload.success'),
            status: Response::HTTP_CREATED
        );
    }

    public function show(EmployeeAttachment $attachment): JsonResponse|IlluminateHttpResponse
    {
        $content = $this->service->getAttachment($attachment);

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

    public function destroy(EmployeeAttachment $attachment): JsonResponse
    {
        $attachment = $this->service->handleDelete($attachment);

        $message = $attachment->exists
            ? 'response.attachment.delete.temporary.success'
            : 'response.attachment.delete.permanent.success';

        return $this->success(message: __($message, [
            'attachment' => $attachment->client_name,
        ]));
    }
}
