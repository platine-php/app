<?php
    declare(strict_types=1);
    
    return [
        'driver' => env('PL_MAINTENANCE_DRIVER', 'file'),
        'bypass_route' => '',
        'url_whitelist' => [],
        'cookie' => [
            'name' => env('PL_MAINTENANCE_COOKIE_NAME', 'platine_maintenance'),
            'lifetime' => env('PL_MAINTENANCE_COOKIE_LIFETIME', 43200, 'int'),
        ],
        'storages' => [
            'file' => [
                'path'   => env('PL_MAINTENANCE_FILE_PATH', __DIR__ . '/../storage/maintenance'),
            ],
        ]
    ];
