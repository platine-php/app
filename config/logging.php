<?php

    use Platine\Logger\LogLevel;

    return [
        'level' => LogLevel::ERROR,
        'driver' => 'file',
        'handlers' => [
            'file' => [
                'path' => env('PL_LOG_PATH', __DIR__ . '/../storage/tmp/logs'),
                'prefix' => 'app.',
                'level' => LogLevel::ERROR,
            ]
        ]
    ];
