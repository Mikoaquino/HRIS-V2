<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponse;
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

    public function __construct(protected UserService $service) {}

    public function index(Request $request): JsonResponse|UserCollection
    {
        $users = $this->service->getUsers($request);

        return UserCollection::make($users);
    }

    public function store(StoreUserRequest $request): JsonResponse|UserResource
    {
        $newUser = $this->service->createUser($request->validated());

        return $this->success(
            data: UserResource::make($newUser),
            message: __('response.success.create', ['resource' => 'user']),
            status: Response::HTTP_CREATED
        );
    }

    public function show(Request $request, string $id): JsonResponse|UserResource
    {
        $user = $this->service->getUser($request, $id);

        if (! $user) {
            return $this->error(
                message: __('response.error.show', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }
        
        return $this->success(data: UserResource::make($user));
    }

    public function update(UpdateUserRequest $request, string $id): JsonResponse|UserResource
    {
        $updatedUser = $this->service->updateUser($request->validated(), $id);
        
        if (! $updatedUser) {
            return $this->error(
                message: __('response.error.show', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return $this->success(
            data: UserResource::make($updatedUser),
            message: __('response.success.update', ['resource' => 'user']),
        );
    }

    public function destroy(string $id): JsonResponse
    {
        $response = $this->service->deleteUser($id);

        if (! $response) {
            $this->error(
                message: __('response.error.show', ['resource' => $id]),
                status: Response::HTTP_NOT_FOUND,
            );
        }

        return $this->success(message: __('response.success.delete', ['resource' => 'user']));
    }
}
