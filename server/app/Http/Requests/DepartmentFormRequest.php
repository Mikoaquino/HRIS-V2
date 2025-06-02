<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepartmentFormRequest extends FormRequest
{
    public function baseRules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:500'],
            'company_id'  => ['required', Rule::exists((new Company)->getTable(), 'id')],
        ];
    }
}
