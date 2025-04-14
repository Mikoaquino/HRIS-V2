<?php

return [
    'create' => [
        'employee' => ':causer created a new employee record.',
        'user' => ':causer created a new user account.',
    ],
    'update' => [
        'employee' => ':causer updated an existing employee record.',
        'user' => ':causer updated user credential(s).',
    ],
    'temporary_delete' => [
        'user' => [
            'single' => ':causer temporarily deleted a user.',
            'batch' => ':causer temporarily deleted :count users.'
        ]
    ],
    'force_delete' => [
        'user' => [
            'single' => ':causer permanently deleted a user.',
            'batch' => ':causer permanently deleted :count users.',
        ]
    ]
];
