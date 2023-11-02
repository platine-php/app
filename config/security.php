<?php

    return [
        'csrf' => [
            'key' => 'csrf_key',
            'expire' => 600,
            'http_methods' => ['POST', 'PUT', 'PATCH', 'DELETE'],
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
        ],
        'policies' => [
            'server' => 'Platine',
            'x-content-type-options' => 'nosniff',
            'x-download-options' => 'noopen',
            'x-frame-options' => 'sameorigin',
            'x-permitted-cross-domain-policies' => 'none',
            'x-powered-by' => '',
            'x-xss-protection' => '1; mode=block',
            'referrer-policy' => 'strict-origin-when-cross-origin',
            'clear-site-data' => [
                'enable' => env('PL_SECURITY_CLEAR_SITE_DATA_ENABLE', false),
                'all' => false,
                'cache' => true,
                'cookies' => true,
                'storage' => true,
                'execution-contexts' => true,
            ],
            'hsts' => [
                'enable' => env('PL_SECURITY_HSTS_ENABLE', false),
                'max-age' => 31536000,
                'include-sub-domains' => true,
                'preload' => false,
            ],
            'csp' => [
                'enable' => env('PL_SECURITY_CSP_ENABLE', true),
                'report-only' => env('PL_SECURITY_CSP_REPORT_ONLY', false),
                'report-to' => '',
                'report-uri' => [],
                'block-all-mixed-content' => false,
                'upgrade-insecure-requests' => false,
                'base-uri' => [],
                'child-src' => [],
                'connect-src' => [],
                'default-src' => [
                    'self' => true,
                ],
                'font-src' => [
                    'self' => true,
                ],
                'form-action' => [
                    'self' => true,
                ],
                'frame-ancestors' => [
                    'self' => true,
                ],
                'frame-src' => [],
                'img-src' => [
                    'self' => true,
                ],
                'manifest-src' => [],
                'media-src' => [],
                'navigate-to' => [
                    'unsafe-allow-redirects' => false,
                ],
                'object-src' => [],
                'plugin-types' => [],
                'prefetch-src' => [],
                'require-trusted-types-for' => [
                    'script' => false,
                ],
                'sandbox' => [
                    'enable' => env('PL_SECURITY_CSP_SANDBOX_ENABLE', false),
                    'allow-downloads-without-user-activation' => false,
                    'allow-forms' => false,
                    'allow-modals' => false,
                    'allow-orientation-lock' => false,
                    'allow-pointer-lock' => false,
                    'allow-popups' => false,
                    'allow-popups-to-escape-sandbox' => false,
                    'allow-presentation' => false,
                    'allow-same-origin' => false,
                    'allow-scripts' => false,
                    'allow-storage-access-by-user-activation' => false,
                    'allow-top-navigation' => false,
                    'allow-top-navigation-by-user-activation' => false,
                ],
                'script-src' => [
                    'none' => false,
                    'self' => true,
                    'report-sample' => false,
                    'allow' => [],
                    'schemes' => [],
                    'unsafe-inline' => false,
                    'unsafe-eval' => false,
                    'unsafe-hashes' => false,
                    'strict-dynamic' => false,
                    'hashes' => [
                        'sha256' => [],
                        'sha384' => [],
                        'sha512' => [],
                    ],
                ],
                'script-src-attr' => [],
                'script-src-elem' => [],
                'style-src' => [
                    'self' => true,
                ],
                'style-src-attr' => [],
                'style-src-elem' => [],
                'trusted-types' => [
                    'enable' => false,
                    'allow-duplicates' => false,
                    'default' => false,
                    'policies' => [],
                ],
                'worker-src' => [],
            ],
            'features-permissions' => [
                'enable' => env('PL_SECURITY_FEATURE_PERMISSION_ENABLE', false),
                'accelerometer' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'ambient-light-sensor' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'autoplay' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'battery' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'camera' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'cross-origin-isolated' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'display-capture' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'document-domain' => [
                    'none' => false,
                    '*' => true,
                    'self' => false,
                    'origins' => [],
                ],
                'encrypted-media' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'execution-while-not-rendered' => [
                    'none' => false,
                    '*' => true,
                    'self' => false,
                    'origins' => [],
                ],
                'execution-while-out-of-viewport' => [
                    'none' => false,
                    '*' => true,
                    'self' => false,
                    'origins' => [],
                ],
                'fullscreen' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'geolocation' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'gyroscope' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'magnetometer' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'microphone' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'midi' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'navigation-override' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'payment' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'picture-in-picture' => [
                    'none' => false,
                    '*' => true,
                    'self' => false,
                    'origins' => [],
                ],
                'publickey-credentials-get' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'screen-wake-lock' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'sync-xhr' => [
                    'none' => false,
                    '*' => true,
                    'self' => false,
                    'origins' => [],
                ],
                'usb' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'web-share' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
                'xr-spatial-tracking' => [
                    'none' => false,
                    '*' => false,
                    'self' => true,
                    'origins' => [],
                ],
            ],
        ]
    ];
