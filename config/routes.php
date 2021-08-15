<?php

use Platine\App\Http\Action\WelcomeAction;
use Platine\Route\Router;

return [static function (Router $router): void {
    $router->get('/', WelcomeAction::class, 'welcome');
}];
