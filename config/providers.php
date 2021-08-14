<?php

use Platine\App\Provider\AppServiceProvider;
use Platine\Framework\Service\Provider\CommandServiceProvider;
use Platine\Framework\Service\Provider\ErrorHandlerServiceProvider;
use Platine\Framework\Service\Provider\LoggerServiceProvider;
use Platine\Framework\Service\Provider\RoutingServiceProvider;
use Platine\Framework\Service\Provider\TemplateServiceProvider;

    return [
        //Framework
        LoggerServiceProvider::class,
        ErrorHandlerServiceProvider::class,
        RoutingServiceProvider::class,
        // DatabaseServiceProvider::class,
        // SessionServiceProvider::class,
        // MigrationServiceProvider::class,
        // CacheServiceProvider::class,
        TemplateServiceProvider::class,
        // CookieServiceProvider::class,
        // LangServiceProvider::class,
        CommandServiceProvider::class,
        // AuthServiceProvider::class,
        // PaginationServiceProvider::class,
        // SecurityServiceProvider::class,

        //Custom
        AppServiceProvider::class,
    ];
