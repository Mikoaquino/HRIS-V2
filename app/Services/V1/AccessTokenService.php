<?php

namespace App\Services\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\V1\StoreAccessTokenRequest;

class AccessTokenService
{
    public function createToken(StoreAccessTokenRequest $request): null|string
    {
        $user = User::firstWhere('email', $request->email);

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return null;
        }

        return $user->createToken('basic')->plainTextToken;
    }

    public function revokeTokens(Request $request): bool
    {
        return $request->user()->tokens()->delete();
    }
}