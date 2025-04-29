<?php

namespace App\Http\Requests;

use App\Enums\Gender;
use App\Enums\CivilStatus;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

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
            'sss_id' => ['required', 'numeric', 'digits:12'],
            'tin_id' => ['required', 'numeric', 'digits:12'],
            'philhealth_id' => ['required', 'numeric', 'digits:12'],
            'pagibig_id' => ['required', 'numeric', 'digits:12'],
            'employment_type_id' => [
                'required',
                'exists:employment_types,id',
            ],
        ];
    }
}
