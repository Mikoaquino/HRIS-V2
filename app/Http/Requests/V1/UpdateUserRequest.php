<?php

namespace App\Http\Requests\V1;

use App\Enums\UserStatus;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        // TODO: Add authorization
        return true;
    }

    public function rules(): array
    {
        $baseRules = [
            'email' => ['required', 'email:rfc,strict,dns,spoof,filter,filter_unicode', 'unique:users,email'],
            'employee_id' => ['required', 'exists:employees,id', 'unique:users,employee_id'],
            'password' => ['required', Password::defaults()],
            'status' => ['required', 'string', Rule::in(UserStatus::getValues())],
        ];

        if ($this->method() === 'PUT') {
            return $baseRules;
        }
        
        foreach($baseRules as &$rule) {
            array_unshift($rule, 'sometimes');
        }

        return $baseRules;
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('employeeId')) {
            $this->merge([
                'employee_id' => $this->employeeId,
            ]);
        }
    }
}
