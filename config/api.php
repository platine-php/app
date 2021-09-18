<?php

    return [
        'auth' => [
            'path' => '/api',
            'url_whitelist' => [],
            'expire' => 3600,
            'headers' => [
                'name' => 'Authorization',
                'token_type' => 'Bearer',
            ]
        ],
        'sign' => [
            'secret' => env('PL_API_SIGN_SECRET', ''), // please set it
            'hmac' => [
                'signature_algo' => 'sha256',
                'token_header_algo' => 'HS256',
            ],
        ]
    ];
