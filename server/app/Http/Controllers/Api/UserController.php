<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    use HttpResponse;

    public function __construct(protected UserService $service) {}

    public function index(UserRequest $request): UserCollection
    {
        $users = $this->service->getUsers($request);

        return UserCollection::make($users);
    }

    public function store(StoreUserRequest $request): JsonResponse
    {
        $newUser = $this->service->createUser($request->validated());

        return $this->success(
            data: UserResource::make($newUser),
            message: __('response.success.create', ['resource' => 'user']),
            status: Response::HTTP_CREATED
        );
    }

    public function show(ShowUserRequest $request, User $user): JsonResponse
    {
        $user = $this->service->getUser($request, $user);

        return $this->success(
            data: UserResource::make($user),
            status: Response::HTTP_FOUND,
        );
    }

    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        $updatedUser = $this->service->updateUser($request->validated(), $user);

        return $this->success(
            data: UserResource::make($updatedUser),
            message: __('response.success.update', ['resource' => 'user']),
        );
    }

    public function destroy(User $user): JsonResponse
    {
        $user = $this->service->deleteUser($user);

        $message = $user->exists
            ? __('response.user.delete.temporary')
            : __('response.user.delete.permanent');

        return $this->success(message: __($message, [
            'user' => $user->employee->first_name,
        ]));
    }
}
