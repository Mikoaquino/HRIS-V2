<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait HttpResponse
{
    public function createResponse($data, $message, $status): JsonResponse
    {
        $payload = ['status' => $status];

        if ($data) {
            $payload['data'] = $data;
        }

        if ($message) {
            $payload = array_merge(['message' => $message], $payload);
        }

        return response()->json($payload, $status);
    }

    public function success($data = null, $message = null, $status = Response::HTTP_OK): JsonResponse
    {
        return $this->createResponse($data, $message, $status);
    }

    public function error($data = null, $message = null, $status = Response::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
    {
        return $this->createResponse($data, $message, $status);
    }
}
