<?php

namespace App\Http\Requests;

use App\Enums\Role;
use App\Enums\UserStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserFormRequest extends FormRequest
{
    public function baseRules(): array
    {
        return [
            'work_email'  => ['required', 'email', 'unique:users,work_email'],
            'employee_id' => ['required', 'exists:employees,id', 'unique:users,employee_id'],
            'password'    => ['required', Password::defaults()],
            'role'        => ['required', 'string', Rule::in(Role::getValues())],
            'status'      => ['required', 'string', Rule::in(UserStatus::getValues())],
        ];
    }
}
