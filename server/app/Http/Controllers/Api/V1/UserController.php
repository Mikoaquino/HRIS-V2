<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\V1\UserRequest;
use App\Models\User;
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

    public function index(UserRequest $request): JsonResponse|UserCollection
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

    public function show(Request $request, User $user): JsonResponse|UserResource
    {
        $user = $this->service->getUser($request, $user);
        
        return $this->success(
            data: UserResource::make($user),
            status: Response::HTTP_FOUND,
        );
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse|UserResource
    {
        $updatedUser = $this->service->updateUser($request->validated(), $user);

        return $this->success(
            data: UserResource::make($updatedUser),
            message: __('response.success.update', ['resource' => 'user']),
        );
    }

    public function destroy(User $user): JsonResponse
    {
        $this->service->deleteUser($user);

        return $this->success(message: __('response.success.delete', ['resource' => 'user']));
    }
}
