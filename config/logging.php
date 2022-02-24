<?php

    use Platine\Logger\LogLevel;

    return [
        'driver' => env('PL_LOG_DRIVER', 'file'),
        'level'  => env('PL_LOG_LEVEL', LogLevel::DEBUG),
        'handlers' => [
            'file' => [
                'path'   => env('PL_LOG_PATH', __DIR__ . '/../storage/tmp/logs'),
                'prefix' => env('PL_LOG_FILE_PREFIX', 'app.'),
                'level'  => env('PL_LOG_FILE_LEVEL', LogLevel::DEBUG),
            ]
        ]
    ];
