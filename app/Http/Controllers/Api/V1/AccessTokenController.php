<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\V1\AccessTokenService;
use App\Traits\HttpResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\V1\StoreAccessTokenRequest;

class AccessTokenController extends Controller
{
    use HttpResponse;

    public function __construct(protected AccessTokenService $accessToken) {}

    public function store(StoreAccessTokenRequest $request): JsonResponse
    {
        try {
            $token = $this->accessToken->createToken($request->validated());
            if (! $token) {
                return $this->error(
                    message: __('auth.failed'),
                    status: Response::HTTP_UNAUTHORIZED
                );
            }
            return $this->success(
                data: ['token' => $token],
                status: Response::HTTP_CREATED,
            );
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }

    public function destroy(Request $request): JsonResponse
    {
        if (! $this->accessToken->revokeTokens($request));
        
        return $this->success(message: __('auth.tokens.deleted'));
    }
}
