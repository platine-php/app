<?php

/**
 * Platine PHP
 *
 * Platine Framework is a lightweight, high-performance, simple and elegant
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
 *  @file ServerCommand.php
 *
 *  The Server command class
 *
 *  @package    Platine\App\Console\Command
 *  @author Platine Developers team
 *  @copyright  Copyright (c) 2020
 *  @license    http://opensource.org/licenses/MIT  MIT License
 *  @link   https://www.platine-php.com
 *  @version 1.0.0
 *  @filesource
 */

declare(strict_types=1);

namespace Platine\App\Console\Command;

use Platine\Console\Command\Command;
use Platine\Console\Command\Shell;

/**
 * @class ServerCommand
 * @package Platine\App\Console\Command
 */
class ServerCommand extends Command
{
    /**
     * The shell instance to use
     * @var Shell
     */
    protected Shell $shell;

    /**
     * Create new instance
     * {@inheritdoc}
     */
    public function __construct(Shell $shell)
    {
        parent::__construct('server', 'Command to manage PHP development server');
        $this->addOption('-a|--address', 'Server address', 'localhost', true);
        $this->addOption('-p|--port', 'Server listen port', '8080', true);
        $this->addOption('-r|--root', 'Server document root', 'public', true);

        $this->shell = $shell;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $host = $this->getOptionValue('address');
        $port = $this->getOptionValue('port');
        $path = $this->getOptionValue('root');
        $cmd = sprintf('%s -S %s:%s -t %s', PHP_BINARY, $host, $port, $path);
        $writer = $this->io()->writer();
        $writer->boldYellow(sprintf('Running command [%s]', $cmd), true);
        $this->shell->setCommand($cmd);
        $this->shell->setOptions(null, null, null, ['bypass_shell' => false]);

        $this->shell->execute(true);
        $writer->boldWhite($this->shell->getOutput(), true);
        if ($this->shell->getExitCode() !== 0) {
            $writer->boldRed($this->shell->getErrorOutput(), true);
        }
    }
}
