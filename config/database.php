<?php

    return [
        'default' => env('PL_DB_DRIVER', 'sqllite'),

        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'database' => env('PL_DB_NAME', ''),
                'hostname' => env('PL_DB_HOST', ''),
                'port' => env('PL_DB_PORT', 0, 'int'),
                'username' => env('PL_DB_USER', 'root'),
                'password' => env('PL_DB_PASSWORD', ''),
                'persistent' => false,
            ]
        ],

        'migration' => [
            'table' => 'migration',
            'path' => env('PL_MIGRATION_PATH', __DIR__ . '/../storage/migrations'),
        ]

    ];
