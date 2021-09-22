<?php

    return [
        'name' => env('PL_APP_NAME', 'PLATINE'),
        'debug' => env('PL_APP_DEBUG', true),
        'env' => env('PL_APP_ENV', 'dev'),
        'url' => env('PL_APP_URL', ''),
        'base_path' => env('PL_APP_BASE_PATH', ''),
        'static_dir' => 'static',
        'response_chunck_size' => 4096,
        'timezone' => env('PL_APP_TIMEZONE', 'UTC'),
    ];
