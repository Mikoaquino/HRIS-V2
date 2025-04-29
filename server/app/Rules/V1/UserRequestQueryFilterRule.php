<?php

namespace App\Rules\V1;

use Closure;
use App\Filters\V1\User\UserFilter;
use Illuminate\Contracts\Validation\ValidationRule;

class UserRequestQueryFilterRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        foreach ($value as $operator => $passedValue) {
            if (! in_array($operator, new UserFilter()->params[$attribute])) {
                $fail("$operator is an invalid :attribute key.")->translate();
            }
        }
    }
}
