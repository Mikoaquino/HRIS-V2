<?php

/*
|--------------------------------------------------------------------------
| API Response Messages
|--------------------------------------------------------------------------
|
*/

return [
    'success' => [
        'create' => 'Successfully created :resource',
        'update' => 'Successfully updated :resource',
        'delete' => 'Successfully deleted :resource',
    ],
    'error' => [
        'show' => 'No result found for :resource',
    ],
    'attachment' => [
        'upload' => [
            'success' => 'Attachment(s) successfully uploaded.',
        ],
        'delete' => [
            'temporary' => [
                'error'   => 'Error archiving :attachment.',
                'success' => ':attachment moved to trash bin.',
            ],
            'permanent' => [
                'error'   => 'Error permanently deleting :attachment.',
                'success' => ':attachment permanently deleted.',
            ],
        ],
    ],
    'req_query' => [
        'relation' => [
            'error' => 'Resource relation [:relation] was not found.',
        ],
    ],
];
