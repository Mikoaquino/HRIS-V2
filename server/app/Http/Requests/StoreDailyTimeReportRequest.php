<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDailyTimeReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dtr' => ['required', 'file', 'mimes:txt', 'mimetypes:text/plain', 'max:5000'],
        ];
    }
}
