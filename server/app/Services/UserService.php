<?php

namespace App\Services;

use App\Models\User;
use App\Enums\UserStatus;
use Illuminate\Http\Request;
use App\Filters\User\SortUser;
use App\Filters\User\FilterUser;
use App\Filters\User\SearchUser;
use App\Http\Requests\ApiRequest;
use Illuminate\Support\Facades\DB;
use App\Filters\LoadModelRelations;
use App\Filters\PaginateQueryBuilder;
use Illuminate\Support\Facades\Pipeline;
use App\Filters\IncludeSoftDeletedModels;
use App\Traits\LoadsRequestQueryRelationship;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    use LoadsRequestQueryRelationship;

    public function __construct(protected User $user) {}

    public function getUsers(ApiRequest $request): LengthAwarePaginator
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
            ->then(fn (LengthAwarePaginator $paginator) => 
                $paginator->appends($request->query())
            );
    }

    public function createUser(array $validatedRequest): User
    {
        return $this->user->create($validatedRequest);
    }

    public function getUser(Request $request, User $user): User
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