<?php

    return [
        'csrf' => [
            'key' => 'csrf_key',
            'expire' => 600,
            'http_methods' => ['POST', 'PUT', 'DELETE'],
            'url_whitelist' => []
        ],
        'encryption' => [
            'key' => env('PL_APP_KEY', ''),
        ],
        'cors' => [
            'path' => '/api',
            'origins' => ['*'],
            'allow_headers' => [
                'Origin',
                'X-Requested-With',
                'Content-Type',
                'Accept',
                'Connection',
                'User-Agent',
                'Cookie',
                'Cache-Control',
                'token',
                'Authorization',
            ],
            'expose_headers' => [],
            'allow_methods' => ['GET', 'OPTIONS', 'HEAD', 'PUT', 'POST', 'DELETE'],
            'allow_credentials' => true,
            'max_age' => 1800,
        ]
    ];
