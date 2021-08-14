<?php

use Platine\App\Http\Middleware\DemoMiddleware;
use Platine\Framework\Http\Middleware\ErrorHandlerMiddleware;
use Platine\Framework\Http\Middleware\RouteDispatcherMiddleware;
use Platine\Framework\Http\Middleware\RouteMatchMiddleware;

    return [
        ErrorHandlerMiddleware::class,
        RouteMatchMiddleware::class,
        DemoMiddleware::class,
        RouteDispatcherMiddleware::class,
    ];
