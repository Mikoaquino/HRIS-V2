<?php

namespace App\Filters\User;

readonly class UserFields
{
    public const FILTERABLE = [
        'email'             => ['eq'],
        'status'            => ['eq', 'ne'],
        'email_verified_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'created_at'        => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at'        => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'deleted_at'        => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    public const SORTABLE = [
        'email',
        'status',
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
