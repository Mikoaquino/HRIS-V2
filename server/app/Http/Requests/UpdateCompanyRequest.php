<?php

namespace App\Http\Requests;

class UpdateCompanyRequest extends CompanyFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [];

        foreach ($this->baseRules() as $key => $rule) {
            $rules[$key] = $this->isMethod('patch')
                ? ['sometimes', ...$rule]
                : $rule;
        }

        return $rules;
    }
}
