<?php

namespace App\Filters\Activity;

readonly class ActivityFields
{
    public const FILTERABLE = [
        'log_name'   => ['eq'],
        'batch_uuid' => ['eq'],
        'event'      => ['eq'],
        'created_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    public const SORTABLE = [
        'log_name',
        'created_at',
        'updated_at',
    ];
}
