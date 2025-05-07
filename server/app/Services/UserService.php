<?php

namespace App\Services;

use App\Enums\UserStatus;
use App\Filters\IncludeSoftDeletedModels;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use App\Filters\User\FilterUser;
use App\Filters\User\SearchUser;
use App\Filters\User\SortUser;
use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Pipeline;

class UserService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected User $user) {}

    public function getUsers(UserRequest $request): LengthAwarePaginator
    {
        return Pipeline::send($this->user->query())
            ->through([
                FilterUser::class,
                SearchUser::class,
                SortUser::class,
                IncludeSoftDeletedModels::class,
                LoadModelRelations::class,
                PaginateQueryBuilder::class,
            ])
            ->thenReturn();
    }

    public function createUser(array $validatedRequest): User
    {
        return $this->user->create($validatedRequest);
    }

    public function getUser(ShowUserRequest $request, User $user): User
    {
        $user->when($request->filled('load'),
            fn () => $this->applyRequestedRelations($user, $request)
        );

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
            $user->status     = UserStatus::INACTIVE;
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
