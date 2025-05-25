<?php
    declare(strict_types=1);
    
    return [
        'auth' => [
            'path'                 => '/api',
            'url_whitelist'        => [],
            'token_expire'         => env('PL_API_TOKEN_EXPIRE', 300, 'int'),
            'refresh_token_expire' => env('PL_API_REFRESH_TOKEN_EXPIRE', 7776000, 'int'),
            'headers' => [
                'name'       => 'Authorization',
                'token_type' => 'Bearer',
            ]
        ],
        'sign' => [
            'secret' => env('PL_API_SIGN_SECRET', ''), // please set it
            'hmac' => [
                'signature_algo'    => env('PL_API_HMAC_SIGN_ALGO', 'sha256'),
                'token_header_algo' => env('PL_API_HMAC_HEADER_ALGO', 'HS256'),
            ],
        ]
    ];
