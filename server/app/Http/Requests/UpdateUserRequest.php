<?php

namespace App\Http\Requests;

class UpdateUserRequest extends UserFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $baseRules = $this->baseRules();

        if ($this->method() === 'PUT') {
            return $baseRules;
        }

        foreach ($baseRules as &$rule) {
            array_unshift($rule, 'sometimes');
        }

        return $baseRules;
    }
}
