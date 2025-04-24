<?php

namespace App\Services\V1;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use App\Filters\V1\UserFilter;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    public function __construct(protected User $user) {}

    public function getUsers(Request $request): LengthAwarePaginator
    {
        $userFilter = new UserFilter;
        $queryClause = $userFilter->transform($request);

        $users = $this->user->where($queryClause);

        if ($request->query('includeEmployee')) {
            $users = $users->with('employee');
        }

        return $users->paginate()->appends($request->query());
    }

    public function createUser(array $validatedRequest): User
    {
        return DB::transaction(fn () => $this->user->create($validatedRequest));
    }

    public function getUser(Request $request, User $user): User
    {
        if ($request->query('includeEmployee')) {
            return $user->loadMissing('employee');
        }

        return $user;
    }

    public function updateUser(array $validatedRequest, User $user): User
    {
        return tap($user)->update($validatedRequest);
    }

    public function deleteUser(User $user)
    {
        if ($user->trashed()) {
            return $this->permanentlyDeleteUser($user);
        }

        return $this->temporarilyDeleteUser($user);
    }

    public function temporarilyDeleteUser(User $user)
    {
        return DB::transaction(function () use ($user) {
            $user->deleted_at = now();
            $user->status = UserStatus::INACTIVE;
            $user->save();
        });
    }

    public function permanentlyDeleteUser(User $user)
    {
        return DB::transaction(function () use ($user) {
            $user->employee->forceDelete();
            $user->forceDelete();
        });
    }
}