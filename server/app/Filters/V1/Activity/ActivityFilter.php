<?php

namespace App\Filters\V1\Activity;

use App\Filters\ApiFilter;

class ActivityFilter extends ApiFilter
{
    public $params = [
        'log_name' => ['eq'],
        'batch_uuid' => ['eq'],
        'event' => ['eq'],
        'created_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];
}