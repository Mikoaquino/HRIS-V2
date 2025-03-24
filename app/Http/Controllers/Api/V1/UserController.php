<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
use Exception;
use Illuminate\Http\Request;
use App\Services\V1\UserService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;
use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    use HttpResponse;

    public function __construct(protected UserService $userService) {}

    public function index(Request $request): JsonResponse|UserCollection
    {
        try {
            $users = $this->userService->getUsers($request);
            return UserCollection::make($users);
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }

    public function store(StoreUserRequest $request): JsonResponse|UserResource
    {
        try {
            $newUser = $this->userService->createUser($request->validated());
            return $this->success(
                data: UserResource::make($newUser),
                message: __('response.success.create', ['resource' => 'user']),
                status: Response::HTTP_CREATED
            );
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }

    public function show(Request $request, string $id): JsonResponse|UserResource
    {
        try {
            $user = $this->userService->getUser($request, $id);
            return $this->success(data: UserResource::make($user));
        } catch (Exception $e) {
            return $this->error(
                message: $e->getMessage(), 
                status: Response::HTTP_NOT_FOUND
            );
        }
    }

    public function update(UpdateUserRequest $request, string $id): JsonResponse|UserResource
    {
        try {
            $updatedUser = $this->userService->updateUser($request->validated(), $id);
            return $this->success(
                data: UserResource::make($updatedUser),
                message: __('response.success.update', ['resource' => 'user']),
            );
        } catch (Exception $e) {
            return $this->error(
                message: $e->getMessage(),
                status: Response::HTTP_NOT_FOUND,
            );
        }
    }

    public function destroy(string $id): JsonResponse
    {
        try {
            $this->userService->deleteUser($id);
            return $this->success(message: __('response.success.delete', ['resource' => 'user']));
        } catch (Exception $e) {
            return $this->error(message: $e->getMessage());
        }
    }
}
