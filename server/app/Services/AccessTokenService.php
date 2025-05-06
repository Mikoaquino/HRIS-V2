<?php

namespace App\Services;

use App\Enums\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccessTokenService
{
    public function createToken(array $request): ?object
    {
        $user = User::firstWhere('email', $request['email']);

        if (! $user || ! Hash::check($request['password'], $user->password)) {
            return null;
        }

        activity()
            ->useLog(ActivityLog::AUTH->value)
            ->by($user->employee)
            ->event('log in')
            ->log(__('activity.create.access_token'));

        $token = $user->createToken('access-token')->plainTextToken;

        return (object) compact('token', 'user');
    }

    public function revokeTokens(Request $request): bool
    {
        activity()
            ->useLog(ActivityLog::AUTH->value)
            ->by($request->user()->employee)
            ->event('log out')
            ->log(__('activity.revoke.access_tokens'));

        return $request->user()->tokens()->delete();
    }
}
