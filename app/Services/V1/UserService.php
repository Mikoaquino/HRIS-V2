<?php

namespace App\Services\V1;

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

    public function createUser(array $validatedRequest)
    {
        return DB::transaction(fn () => $this->user->create($validatedRequest));
    }

    public function getUser(Request $request, string $id): User
    {
        $user = $this->user->findOrFail($id);

        if ($request->query('includeEmployee')) {
            return $user->loadMissing('employee');
        }

        return $user;
    }

    public function updateUser(array $validatedRequest, string $id)
    {
        $user = $this->user->findOrFail($id);

        return DB::transaction(fn () => tap($user)->update($validatedRequest));
    }
}