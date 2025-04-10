<?php

namespace App\Http\Requests\V1;

use App\Enums\Gender;
use App\Enums\CivilStatus;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Unique; 
use Illuminate\Validation\Rule;


class StoreEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'last_name' => ['required', 'string'],
            'birth_date' => ['required', 'date'],
            'gender' => ['required', Rule::in(Gender::getValues())],
            'civil_status' => ['required', Rule::in(CivilStatus::getValues())],
            'nationality' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'contact_number' => ['required', 'string', 'max:11', 'min:11', 'regex:/^09\d{9}$/'],
        ];
    }
}
