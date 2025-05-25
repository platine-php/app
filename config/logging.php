<?php
    declare(strict_types=1);
    
    use Platine\Logger\LogLevel;

    return [
        'driver' => env('PL_LOG_DRIVER', 'file'),
        'level' => env('PL_LOG_LEVEL', LogLevel::DEBUG),
        'timestamp' => env('PL_LOG_TIMESTAMP', false),
        'handlers' => [
            'file' => [
                'path'     => env('PL_LOG_PATH', __DIR__ . '/../storage/tmp/logs'),
                'prefix'   => env('PL_LOG_FILE_PREFIX', 'app.'),
                'level'    => env('PL_LOG_FILE_LEVEL', LogLevel::DEBUG),
                'ip_addr'  => env('PL_LOG_FILE_IP_ADDR', false),
            ]
        ]
    ];
