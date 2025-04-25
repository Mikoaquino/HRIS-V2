<?php

namespace App\Services\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccessTokenService
{
    public function createToken(array $request): ?string
    {
        $user = User::firstWhere('email', $request['email']);

        if (! $user || ! Hash::check($request['password'], $user->password)) {
            return null;
        }

        return $user->createToken('access-token')->plainTextToken;
    }

    public function revokeTokens(Request $request): bool
    {
        return $request->user()->tokens()->delete();
    }
}