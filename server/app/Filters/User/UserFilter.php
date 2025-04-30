<?php

namespace App\Filters\User;

use App\Filters\ApiFilter;

class UserFilter extends ApiFilter
{
    public $params = [
        'email' => ['eq'],
        'status' => ['eq', 'ne'],
        'email_verified_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'created_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'deleted_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];
}