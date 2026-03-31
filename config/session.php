<?php

use Illuminate\Support\Str;

return [

    'driver' => 'redis',
    'lifetime' => (int) env('SESSION_LIFETIME', 120),
    'expire_on_close' => false,
    'encrypt' => true,
    'connection' => 'session',
    'lottery' => [2, 100],
    'cookie' => Str::slug((string) env('APP_URL', 'https://www.avantiy.com')).'-session',
    'path' => '/',
    'domain' => env('SESSION_DOMAIN'),
    'secure' => true,
    'http_only' => true,
    'same_site' => 'strict', // switch to lax if we have issues
    'partitioned' => false,
    'serialization' => 'json',
];
