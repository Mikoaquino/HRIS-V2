<?php

namespace App\Http\Requests\V1;

use App\Enums\UserStatus;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email:rfc,strict,dns,spoof,filter,filter_unicode', 'unique:users,email'],
            'employee_id' => ['required', 'exists:employees,id', 'unique:users,employee_id'],
            'password' => ['required', Password::defaults()],
            'status' => ['required', 'string', Rule::in(UserStatus::getValues())],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'employee_id' => $this->employeeId,
        ]);
    }
}
