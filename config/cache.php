<?php

    return [
        'ttl' => 300,
        'driver' => 'file',
        'storages' => [
            'file' => [
                'path' => env('PL_CACHE_FILE_PATH', __DIR__ . '/../storage/tmp/cache'),
                'prefix' => 'cache_',
            ],
            'apcu' => [],
            'null' => [],
        ]
    ];
