<?php

use Platine\App\Http\Middleware\DemoMiddleware;
use Platine\Framework\Http\Middleware\ErrorHandlerMiddleware;
use Platine\Framework\Http\Middleware\RouteDispatcherMiddleware;
use Platine\Framework\Http\Middleware\RouteMatchMiddleware;
use Platine\Framework\Http\Middleware\SecurityPolicyMiddleware;

    return [
        ErrorHandlerMiddleware::class,
        RouteMatchMiddleware::class,
        DemoMiddleware::class,
        SecurityPolicyMiddleware::class,
        RouteDispatcherMiddleware::class,
    ];
