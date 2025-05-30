<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFormRequest extends FormRequest
{
    /**
     * Define base validation rules for a company.
     */
    public function baseRules(): array
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'type'    => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'contact_number'  => ['required', 'string', 'max:11', 'regex:/^[0-9]*$/'],
        ];
    }
}