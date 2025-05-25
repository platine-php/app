<?php
    declare(strict_types=1);
    
    return [
        'relying_party_id' => env('PL_WEBAUTHN_RELYING_PARTY_ID', 'localhost'),
        'relying_party_name' => env('PL_WEBAUTHN_RELYING_PARTY_NAME', 'Platine App'),
        'relying_party_logo' => '', // base64 image format
        'timeout' => env('PL_WEBAUTHN_TIMEOUT', 60, 'int'), // in second
        'challenge_length' => env('PL_WEBAUTHN_CHALLENGE_LENGTH', 32, 'int'),
        'transport_types' => [
            'internal',
        ],
        'ignore_origins' => [
            'localhost'
        ],
    ];
