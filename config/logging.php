<?php

    use Platine\Logger\LogLevel;

    return [
        'level' => env('PL_LOG_LEVEL', LogLevel::DEBUG),
        'driver' => 'file',
        'handlers' => [
            'file' => [
                'path' => env('PL_LOG_PATH', __DIR__ . '/../storage/tmp/logs'),
                'prefix' => 'app.',
                'level' => env('PL_LOG_FILE_LEVEL', LogLevel::DEBUG),
            ]
        ]
    ];
