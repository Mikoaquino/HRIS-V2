<?php

return [
    'create' => [
        'employee' => ':causer created a new employee record.',
        'user' => 'Created a new user account.',
        'access_token' => 'Logged in to the system.',
    ],
    'update' => [
        'employee' => ':causer updated an existing employee record.',
        'user' => 'Updated a user credential(s).',
    ],
    'temporary_delete' => [
        'user' => [
            'single' => 'Temporarily deleted a user.',
            'batch' => ':causer temporarily deleted :count users.'
        ]
    ],
    'force_delete' => [
        'user' => [
            'single' => 'Permanently deleted a user.',
            'batch' => ':causer permanently deleted :count users.',
        ]
    ],
    'revoke' => [
        'access_tokens' => 'Logged out of the system.',
    ]
];
