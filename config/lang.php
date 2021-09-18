<?php

    return [
        'locale' => env('PL_APP_LOCALE', 'en_US'),
        'store_name' => 'app_lang',
        'domain' => 'languages',
        'encoding' => 'UTF-8',
        'translation_path' => env('PL_TRANSLATION_PATH', __DIR__ . '/../storage/resource/lang'),
        'locales' => ['en_US']
    ];
