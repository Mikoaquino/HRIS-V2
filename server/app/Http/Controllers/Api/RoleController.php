<?php

namespace App\Http\Controllers\Api;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    use HttpResponse;

    // Maybe we should use an actual database? - Carl
    public function index(): JsonResponse
    {
        $roles = array_map(fn ($role) => [
            'id'   => $role,
            'name' => $role->getLabel(),
        ], Role::cases());

        return $this->success($roles);
    }
}
