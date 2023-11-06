<?php

    return [
        'name'   => env('PL_APP_SESSION_NAME', 'PLATINE'),
        'driver' => env('PL_APP_SESSION_DRIVER', 'file'),
        'ttl'    => env('PL_APP_SESSION_VALIDITY', 900, 'int'),
        'flash_key' => 'session_flash',
        'cookie' => [
            'lifetime' => env('PL_APP_SESSION_COOKIE_LIFETIME', 0, 'int'),
            'path'     => env('PL_APP_SESSION_COOKIE_PATH', '/'),
            'domain'   => env('PL_APP_SESSION_COOKIE_DOMAIN', ''),
            'secure'   => env('PL_APP_SESSION_COOKIE_SECURE', false),
        ],
        'storages' => [
            'file' => [
                'path'   => env('PL_SESSION_FILE_PATH', __DIR__ . '/../storage/tmp/session'),
                'prefix' => env('PL_APP_SESSION_FILE_PREFIX', 'platine_'),
            ],
            'apcu' => [],
            'null' => [],
        ]

    ];
