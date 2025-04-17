<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\V1\AccessTokenService;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\V1\StoreAccessTokenRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccessTokenController extends Controller
{
    use HttpResponse;

    public function __construct(protected AccessTokenService $service) {}

    public function store(StoreAccessTokenRequest $request): JsonResponse
    {
        $token = $this->service->createToken($request->validated());

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
    }

    public function destroy(Request $request): JsonResponse
    {
        if (! $this->service->revokeTokens($request));
        
        return $this->success(message: __('auth.tokens.deleted'));
    }
}
