<?php

    return [
        'name' => env('PL_APP_SESSION_NAME', 'PLATINE'),
        'driver' => env('PL_APP_SESSION_DRIVER', 'file'),
        'ttl' => env('PL_APP_SESSION_VALIDITY', 300, 'int'),
        'flash_key' => 'session_flash',
        'cookie' => [
            'lifetime' => 0,
            'path' => '/',
            'domain' => '',
            'secure' => false,
        ],
        'storages' => [
            'file' => [
                'path' => env('PL_SESSION_FILE_PATH', __DIR__ . '/../storage/tmp/session'),
                'prefix' => 'platine_',
            ],
            'apcu' => [],
            'null' => [],
        ]

    ];
