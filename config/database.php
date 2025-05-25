<?php
    declare(strict_types=1);
    
    return [
        'default' => env('PL_DB_DRIVER', 'mysql'),
        'slow_query_time' => env('PL_DB_SLOW_QUERY_TIME', 1.0, 'float'), // in second

        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'database' => env('PL_DB_NAME', ''),
                'hostname' => env('PL_DB_HOST', '127.0.0.1'),
                'port' => env('PL_DB_PORT', 3306, 'int'),
                'username' => env('PL_DB_USER', 'root'),
                'password' => env('PL_DB_PASSWORD', ''),
                'persistent' => false,
            ]
        ],

        'migration' => [
            'table' => 'migration',
            'path' => env('PL_MIGRATION_PATH', __DIR__ . '/../storage/migrations'),
            'seed_path' => env('PL_SEED_PATH', __DIR__ . '/../storage/migrations/seeds'),
        ]

    ];
