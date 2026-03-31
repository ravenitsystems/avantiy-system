<?php

use Illuminate\Support\Str;

return [

    'default' => 'redis',

    'stores' => [
        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
            'lock_connection' => 'cache',
        ],
    ],

    'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_URL', 'https://www.avantiy.com')).'-cache-'),
    'serializable_classes' => false,
];
