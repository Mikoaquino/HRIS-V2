<?php

namespace App\Http\Requests;

class StoreUserRequest extends UserFormRequest
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
