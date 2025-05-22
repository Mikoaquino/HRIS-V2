<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'load'         => ['string'],
            'only_trashed' => ['in:true,false'],
            'with_trashed' => ['in:true,false'],
            'filter'       => ['array'],
            'sort'         => ['array'],
            'q'            => ['string'],
        ];
    }
}
