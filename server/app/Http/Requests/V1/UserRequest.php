<?php

namespace App\Http\Requests\V1;

use App\Rules\V1\UserRequestQueryFilterRule;
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
            'email' => ['array', new UserRequestQueryFilterRule],
            'status' => ['array', new UserRequestQueryFilterRule],
            'email_verified_at' => ['array', new UserRequestQueryFilterRule],
            'created_at' => ['array', new UserRequestQueryFilterRule],
            'updated_at' => ['array', new UserRequestQueryFilterRule],
            'deleted_at' => ['array', new UserRequestQueryFilterRule],
            'only_trashed' => ['in:true,false'],
            'with_trashed' => ['in:true,false'],
            'load' => ['string'],
        ];
    }
}
