<?php

return [
    'default' => 'database',

    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => 'avantiy',
            'table' => 'job',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],
    ],

    'batching' => [
        'database' => 'avantiy',
        'table' => 'job_batch',
    ],

    'failed' => [
        'driver' => 'database-uuids',
        'database' => 'avantiy',
        'table' => 'failed_job',
    ],

];
