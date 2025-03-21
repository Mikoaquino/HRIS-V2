<?php

return [
    'create' => [
        'employee' => ':causer created a new employee record.',
        'user' => ':causer created a new user account.',
    ],
    'update' => [
        'employee' => ':causer updated an existing employee record.',
        'user' => ':causer updated :pronoun user credential(s).',
    ],
    'temporary_delete' => [
        'employee' => [
            'single' => ':causer temporarily deleted an employee.',
            'batch' => ':causer temporarily deleted :count employees.'
        ]
    ],
    'force_delete' => [
        'employee' => [
            'single' => ':causer permanently deleted an employee.',
            'batch' => ':causer permanently deleted :count employees.',
        ]
    ]
];
