<?php

namespace App\Http\Requests;

use App\Enums\UserStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserFormRequest extends FormRequest
{
    public function baseRules(): array
    {
        return [
            'email'       => ['required', 'email:rfc,strict,dns,spoof,filter,filter_unicode', 'unique:users,email'],
            'employee_id' => ['required', 'exists:employees,id', 'unique:users,employee_id'],
            'password'    => ['required', Password::defaults()],
            'status'      => ['required', 'string', Rule::in(UserStatus::getValues())],
        ];
    }
}
