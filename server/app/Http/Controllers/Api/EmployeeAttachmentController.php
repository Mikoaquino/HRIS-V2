<?php

namespace App\Http\Controllers\Api;

use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use App\Models\EmployeeAttachment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Services\EmployeeAttachmentService;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreEmployeeAttachmentRequest;
use Illuminate\Http\Response as IlluminateHttpResponse;

class EmployeeAttachmentController extends Controller
{
    use HttpResponse;

    public function __construct(protected EmployeeAttachmentService $service) {}

    public function store(StoreEmployeeAttachmentRequest $request): JsonResponse
    {
        $responseData = $this->service->handleUploads($request->validated());

        return $this->success(
            $responseData,
            __('response.attachment.upload.success'),
            Response::HTTP_CREATED
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
}
