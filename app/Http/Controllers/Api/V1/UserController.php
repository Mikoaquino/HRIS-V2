<?php

namespace App\Http\Controllers\Api\V1;

use Exception;
use Illuminate\Http\Request;
use App\Services\V1\UserService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;
use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\UpdateUserRequest;

class UserController extends Controller
{
    public function __construct(protected UserService $userService) {}

    public function index(Request $request): JsonResponse|UserCollection
    {
        try {
            $users = $this->userService->getUsers($request);
            return UserCollection::make($users);
        } catch (Exception $e) {
            return response()->json(
                data: ['error' => $e->getMessage()], 
                status: 500
            );
        }
    }

    public function store(StoreUserRequest $request): JsonResponse|UserResource
    {
        try {
            $newUser = $this->userService->createUser($request->validated());
            return UserResource::make($newUser);
        } catch (Exception $e) {
            return response()->json(
                data: ['error' => $e->getMessage()], 
                status: 500
            );
        }
    }

    public function show(Request $request, string $id): JsonResponse|UserResource
    {
        try {
            $user = $this->userService->getUser($request, $id);
            return UserResource::make($user);
        } catch (Exception $e) {
            return response()->json(
                data: ['error' => $e->getMessage()], 
                status: 404
            );
        }
    }

    public function update(UpdateUserRequest $request, string $id): JsonResponse|UserResource
    {
        try {
            $updatedUser = $this->userService->updateUser($request->validated(), $id);
            return UserResource::make($updatedUser);
        } catch (Exception $e) {
            return response()->json(
                data: ['error' => $e->getMessage()], 
                status: 404
            );
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
