<?php

namespace App\Http\Requests;

class UpdateDepartmentRequest extends DepartmentFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod('PUT')) {
            return $this->baseRules();
        }

        $rules = [];

        foreach ($this->baseRules() as $key => $rule) {
            $rules[$key] = ['sometimes', ...$rule];
        }

        return $rules;
    }
}
