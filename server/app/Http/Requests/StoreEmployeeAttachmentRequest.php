<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeAttachmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_id'   => ['required', 'exists:employees,id'],
            'attachments'   => ['required', 'array', 'max:15'],
            'attachments.*' => ['required', 'file', 'mimes:pdf', 'max:5000'],
        ];
    }
}
