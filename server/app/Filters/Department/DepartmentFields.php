<?php

namespace App\Filters\Department;

readonly class DepartmentFields
{
    public const FILTERABLE = [
        'name'     => ['eq'],
        'description'    => ['eq'],
    ];

    public const SORTABLE = [
        'name',
        'description',
    ];
}
