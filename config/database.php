<?php

    return [
        'default' => 'mysql',

        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'database' => '',
                'hostname' => '127.0.0.1',
                'port' => 3306,
                'username' => 'root',
                'password' => '',
                'persistent' => false,
            ]
        ],

        'migration' => [
            'table' => 'migration',
            'path' => __DIR__ . '/../storage/migrations',
        ]

    ];