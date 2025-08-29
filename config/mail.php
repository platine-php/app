<?php

    declare(strict_types=1);

    return [
        'provider' => env('PL_MAIL_PROVIDER', 'mail'), //smtp, mail, null
        'smtp' => [
            'host' => env('PL_MAIL_SMTP_HOST', 'localhost'),
            'port' => env('PL_MAIL_SMTP_PORT', 25, 'int'),
            'timeout' => env('PL_MAIL_SMTP_TIMEOUT', 30, 'int'),
            'response_timeout' => env('PL_MAIL_SMTP_RESPONSE_TIMEOUT', 10, 'int'),
            'username' => env('PL_MAIL_SMTP_USERNAME', ''),
            'password' => env('PL_MAIL_SMTP_PASSWORD', ''),
         ],
    ];
