<?php

use Illuminate\Support\Str;
use Pdo\Mysql;

return [

    'default' => env('DB_CONNECTION', 'avantiy'),

    'connections' => [
        'avantiy' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    'redis' => [

        'client' => 'phpredis',

        'options' => [
            'cluster' => 'redis',
            'prefix' => Str::slug((string) env('APP_URL', 'https://www.avantiy.com')).'-database-',
            'persistent' => false,
        ],

        'session' => [
            'host' => env('REDIS_SESSION_HOST', '127.0.0.1'),
            'username' => env('REDIS_SESSION_USERNAME'),
            'password' => env('REDIS_SESSION_PASSWORD'),
            'port' => env('REDIS_SESSION_PORT', '6379'),
            'database' => env('REDIS_SESSION_DB', '0'),
            'prefix' => 'session-',
            'max_retries' =>  3,
            'backoff_algorithm' => 'decorrelated_jitter',
            'backoff_base' => 100,
            'backoff_cap' => 1000,
        ],
        'cache' => [
            'host' => env('REDIS_CACHE_HOST', '127.0.0.1'),
            'username' => env('REDIS_CACHE_USERNAME'),
            'password' => env('REDIS_CACHE_PASSWORD'),
            'port' => env('REDIS_CACHE_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '0'),
            'prefix' => 'cache-',
            'max_retries' =>  3,
            'backoff_algorithm' => 'decorrelated_jitter',
            'backoff_base' => 100,
            'backoff_cap' => 1000,
        ],


    ],

];
