<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        // TODO: Add authorization
        return true;
    }

    public function rules(): array
    {
        $baseRules = [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255']
        ];

        if ($this->method() === 'PUT') {
            return $baseRules;
        }
        
        foreach ($baseRules as &$rule) {
            array_unshift($rule, 'sometimes');
        }

        return $baseRules;
    }
}
