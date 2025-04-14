<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class EmployeeFilter extends ApiFilter
{
    protected $params = [
        'firstName' => ['eq'],
        'middleName' => ['eq'],
        'lastName' => ['eq'],
        'createdAt' => ['gt', 'gte', 'eq', 'lt', 'lte'],
        'updatedAt' => ['gt', 'gte', 'eq', 'lt', 'lte'],
        'deletedAt' => ['gt', 'gte', 'eq', 'lt', 'lte'],
    ];

    protected $operatorMap = [
        'gt' => '>',
        'gte' => '>=',
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
    ];

    protected $columnMap = [
        'firstName' => 'first_name',
        'middleName' => 'middle_name',
        'lastName' => 'last_name',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'deletedAt' => 'deleted_at',
    ];
}