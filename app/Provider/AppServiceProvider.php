<?php

/**
 * Platine PHP
 *
 * Platine PHP is a lightweight, high-performance, simple and elegant
 * PHP Web framework
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2020 Platine PHP
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 *  @file AppServiceProvider.php
 *
 *  The Application service provider class
 *
 *  @package    Platine\App\Provider
 *  @author Platine Developers team
 *  @copyright  Copyright (c) 2020
 *  @license    http://opensource.org/licenses/MIT  MIT License
 *  @link   http://www.iacademy.cf
 *  @version 1.0.0
 *  @filesource
 */

declare(strict_types=1);

namespace Platine\App\Provider;

use Platine\App\Console\Command\ServerCommand;
use Platine\App\Http\Action\WelcomeAction;
use Platine\App\Http\Middleware\DemoMiddleware;
use Platine\Filesystem\Adapter\AdapterInterface;
use Platine\Filesystem\Adapter\Local\LocalAdapter;
use Platine\Filesystem\Filesystem;
use Platine\Framework\Service\ServiceProvider;

/**
 * @class AppServiceProvider
 * @package Platine\App\Provider
 */
class AppServiceProvider extends ServiceProvider
{

    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->bind(DemoMiddleware::class);
        $this->app->bind(WelcomeAction::class);
        $this->app->bind(ServerCommand::class);
        $this->app->bind(AdapterInterface::class, LocalAdapter::class);
        $this->app->bind(Filesystem::class);
        
        $this->addCommand(ServerCommand::class);
    }
}
