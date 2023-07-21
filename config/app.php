<?php

    return [
        'name' => env('PL_APP_NAME', 'PLATINE'),
        'debug' => env('PL_APP_DEBUG', true),
        'env' => env('PL_APP_ENV', 'dev'),
        'version' => env('PL_APP_VERSION', '1.0.0-dev'),
        'url' => env('PL_APP_URL', ''),
        'host' => env('PL_APP_HOST', 'http://localhost'), //without the last "/"
        'base_path' => env('PL_APP_BASE_PATH', ''),
        'static_dir' => 'static',
        'response_chunck_size' => 4096,
        'timezone' => env('PL_APP_TIMEZONE', 'UTC'),
    ];
