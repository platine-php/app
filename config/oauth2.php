<?php
    declare(strict_types=1);
    
    use Platine\OAuth2\Grant\AuthorizationGrant;
    use Platine\OAuth2\Grant\ClientCredentialsGrant;
    use Platine\OAuth2\Grant\PasswordGrant;
    use Platine\OAuth2\Grant\RefreshTokenGrant;

    return [
        'grants' => [
            AuthorizationGrant::class,
            ClientCredentialsGrant::class,
            RefreshTokenGrant::class,
            PasswordGrant::class,
        ],
        'ttl' => [
            'authorization_code' => env('PL_OAUTH_TTL_AUTHORIZATION_CODE', 120, 'int'),
            'access_token' => env('PL_OAUTH_TTL_ACCESS_TOKEN', 3600, 'int'),
            'refresh_token' => env('PL_OAUTH_TTL_REFRESH_TOKEN', 86400, 'int'),
        ],
        'rotate_refresh_token' => env('PL_OAUTH_ROTATE_REFRESH_TOKEN', false),
        'revoke_rotated_refresh_token' => env('PL_OAUTH_REVOKE_ROTATED_REFRESH_TOKEN', true),
        'url_whitelist' => [
            'oauth2_authorization_code',
            'oauth2_revoke_access_token',
            'oauth2_access_token',
        ],
    ];
