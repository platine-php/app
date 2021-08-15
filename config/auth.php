<?php

use Platine\Framework\Auth\Entity\Permission;
use Platine\Framework\Auth\Entity\Role;
use Platine\Framework\Auth\Entity\User;

    return [
        'authentication' => [
            'login_route' => 'login',
            'url_whitelist' => [],
            'user_entity' => User::class
        ],
        'authorization' => [
            'unauthorized_route' => 'home',
            'role_entity' => Role::class,
            'permission_entity' => Permission::class,
        ],
    ];
