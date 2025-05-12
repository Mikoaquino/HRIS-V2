<?php

namespace App\Http\Requests;

class StoreEmployeeRequest extends EmployeeFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->baseRules();
    }
}
