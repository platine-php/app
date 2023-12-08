<?php

declare(strict_types=1);

namespace Platine\Test\App\Console\Command;

use org\bovigo\vfs\vfsStream;
use Platine\App\Console\Command\ServerCommand;
use Platine\Console\Application;
use Platine\Console\Command\Shell;
use Platine\Console\IO\Interactor;
use Platine\Console\Output\Color;
use Platine\Console\Output\Writer;
use Platine\Dev\PlatineTestCase;

/*
 * @group core
 * @group app
 */
class ServerCommandTest extends PlatineTestCase
{
    protected $vfsRoot;
    protected $vfsPath;
    protected $vfsOutputStream;

    protected function setUp(): void
    {
        parent::setUp();
        //need setup for each test
        $this->vfsRoot = vfsStream::setup();
        $this->vfsPath = vfsStream::newDirectory('my_tests')->at($this->vfsRoot);
        $this->vfsOutputStream = $this->createVfsFileOnly('stdout', $this->vfsPath);
    }

    public function testExecuteSuccess(): void
    {
        $writer = $this->getWriterInstance();
        $interactor = $this->getMockInstance(Interactor::class, [
            'writer' => $writer
        ]);
        $app = $this->getMockInstance(Application::class, [
            'io' => $interactor
        ]);

        $shell = $this->getMockInstance(Shell::class);
        $o = new ServerCommand($shell);
        $o->bind($app);
        $o->parse(['platine']);
        $o->execute();
        $expected = 'Running command [' . PHP_BINARY . ' -S localhost:8080 -t public]


';
        $this->assertCommandOutput($expected, $this->getConsoleOutputContent());
    }

    public function testExecuteError(): void
    {
        $writer = $this->getWriterInstance();
        $interactor = $this->getMockInstance(Interactor::class, [
            'writer' => $writer
        ]);
        $app = $this->getMockInstance(Application::class, [
            'io' => $interactor
        ]);

        $shell = $this->getMockInstance(Shell::class, [
            'getExitCode' => 19,
            'getErrorOutput' => 'command error',
        ]);
        $o = new ServerCommand($shell);
        $o->bind($app);
        $o->parse(['platine']);
        $o->execute();
        $expected = 'Running command [' . PHP_BINARY . ' -S localhost:8080 -t public]

command error
';
        $this->assertCommandOutput($expected, $this->getConsoleOutputContent());
    }


    /**
     * Return writer instance for test
     * @return Writer
     */
    protected function getWriterInstance(): Writer
    {
        $color = new Color();
        $this->setPropertyValue(Color::class, $color, 'format', ':txt:');
        $writer = new Writer($this->vfsOutputStream->url(), $color);

        return $writer;
    }

    /**
     * Return test output stream content
     * @return string
     */
    protected function getConsoleOutputContent(): string
    {
        return $this->vfsOutputStream->getContent();
    }
}
