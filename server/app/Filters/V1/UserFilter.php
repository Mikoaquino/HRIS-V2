<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class UserFilter extends ApiFilter
{
    protected $params = [
        'email' => ['eq'],
        'remember_token' => ['eq'],
        'password' => ['eq'],
        'status' => ['eq', 'ne'],
        'created_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'deleted_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    protected $operatorMap = [
        'gt' => '>',
        'gte' => '>=',
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'lte' => '<=',
    ];
}