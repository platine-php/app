<?php
    declare(strict_types=1);
    
    return [
        'driver' => env('PL_CACHE_DRIVER', 'file'),
        'ttl'    => env('PL_CACHE_TTL', 300, 'int'),
        'storages' => [
            'file' => [
                'path'   => env('PL_CACHE_FILE_PATH', __DIR__ . '/../storage/tmp/cache'),
                'prefix' => env('PL_CACHE_FILE_PREFIX', 'cache_'),
            ],
            'apcu' => [],
            'null' => [],
        ]
    ];
