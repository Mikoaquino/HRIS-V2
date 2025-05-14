<?php

namespace App\Filters\Employee;

readonly class EmployeeFields
{
    public const FILTERABLE = [
        'first_name'     => ['eq'],
        'middle_name'    => ['eq'],
        'last_name'      => ['eq'],
        'birth_date'     => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'gender'         => ['eq', 'ne'],
        'civil_status'   => ['eq', 'ne'],
        'nationality'    => ['eq', 'ne'],
        'religion'       => ['eq', 'ne'],
        'contact_number' => ['eq'],
        'sss_id'         => ['eq'],
        'tin_id'         => ['eq'],
        'philhealth_id'  => ['eq'],
        'pagibig_id'     => ['eq'],
        'created_at'     => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updated_at'     => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'archived_at'    => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    public const SORTABLE = [
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'gender',
        'civil_status',
        'nationality',
        'religion',
        'contact_number',
        'sss_id',
        'tin_id',
        'philhealth_id',
        'pagibig_id',
        'created_at',
        'updated_at',
        'archived_at',
    ];
}
