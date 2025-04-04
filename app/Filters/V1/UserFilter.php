<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class UserFilter extends ApiFilter
{
    protected $params = [
        'email' => ['eq'],
        'rememberToken' => ['eq'],
        'password' => ['eq'],
        'status' => ['eq', 'ne'],
        'createdAt' => ['eq', 'gt', 'gte', 'eq', 'lt', 'lte'],
        'updatedAt' => ['eq', 'gt', 'gte', 'eq', 'lt', 'lte'],
    ];

    protected $operatorMap = [
        'gt' => '>',
        'gte' => '>=',
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'lte' => '<=',
    ];

    protected $columnMap = [
        'email' => 'email',
        'rememberToken' => 'remember_token',
        'password' => 'password',
        'status' => 'status',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];
}