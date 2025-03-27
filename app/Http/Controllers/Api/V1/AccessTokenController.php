<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\V1\StoreAccessTokenRequest;

class AccessTokenController extends Controller
{
    use HttpResponse;

    public function store(StoreAccessTokenRequest $request): JsonResponse
    {
        $user = User::firstWhere('email', $request->email);

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return $this->error(
                message: __('auth.failed'),
                status: Response::HTTP_UNAUTHORIZED
            );
        }

        return $this->success(
            data: ['token' => $user->createToken('basic')->plainTextToken],
            status: Response::HTTP_CREATED,
        );
    }

    public function destroy(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        
        return $this->success(
            message: __('auth.tokens.deleted'),
            status: Response::HTTP_NO_CONTENT
        );
    }
}
