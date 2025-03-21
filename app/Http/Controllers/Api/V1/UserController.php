<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\UserFilter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function __construct(protected User $user) {}

    public function index(Request $request): UserCollection
    {
        $userFilter = new UserFilter;
        $queryClause = $userFilter->transform($request);

        $users = $this->user->where($queryClause);

        if ($request->query('includeEmployee')) {
            $users = $users->with('employee');
        }

        return new UserCollection($users->paginate()->appends($request->query()));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(mixed $id): JsonResponse|UserResource
    {
        try {
            return new UserResource($this->user->findOrFail($id));
        } catch (ModelNotFoundException $modelNotFoundException) {
            return response()->json([
                'message' => $modelNotFoundException->getMessage()
            ], 404);
        } 
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
