<?php

    use Platine\Logger\LogLevel;

    return [
        'level' => LogLevel::ERROR,
        'driver' => 'file',
        'handlers' => [
            'file' => [
                'path' => __DIR__ . '/../storage/tmp/logs',
                'prefix' => 'app.',
                'level' => LogLevel::ERROR,
            ]
        ]
    ];
