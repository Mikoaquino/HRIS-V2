<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccessTokenRequest;
use App\Http\Resources\UserResource;
use App\Services\AccessTokenService;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AccessTokenController extends Controller
{
    use HttpResponse;

    public function __construct(protected AccessTokenService $service) {}

    public function store(StoreAccessTokenRequest $request): JsonResponse
    {
        $response = $this->service->createToken($request->validated());

        if (! $response) {
            return $this->error(
                message: __('auth.failed'),
                status: Response::HTTP_UNAUTHORIZED
            );
        }

        return $this->success(
            data: [
                'token' => $response->token,
                'user'  => UserResource::make($response->user),
            ],
            status: Response::HTTP_CREATED,
        );
    }

    public function destroy(Request $request): JsonResponse
    {
        if (! $this->service->revokeTokens($request));

        return $this->success(message: __('auth.tokens.deleted'));
    }
}
