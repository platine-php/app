<?php

declare(strict_types=1);

namespace Platine\Test\App\Console\Command;

use org\bovigo\vfs\vfsStream;
use Platine\App\Console\Command\ServerCommand;
use Platine\Console\Application;
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
        global $mock_function_exists_to_true,
               $mock_proc_open_to_res,
               $mock_is_resource_to_true,
               $mock_proc_get_status_to_array,
               $mock_proc_get_status_to_array_running_false,
               $mock_stream_get_contents_to_foo;

        $mock_proc_get_status_to_array_running_false = true;
        $mock_proc_get_status_to_array = true;
        $mock_function_exists_to_true = true;
        $mock_proc_open_to_res = true;
        $mock_is_resource_to_true = true;
        $mock_stream_get_contents_to_foo = true;

        $writer = $this->getWriterInstance();
        $interactor = $this->getMockInstance(Interactor::class, [
            'writer' => $writer
        ]);
        $app = $this->getMockInstance(Application::class, [
            'io' => $interactor
        ]);

        $o = new ServerCommand();
        $o->bind($app);
        $o->parse(['platine']);
        $o->execute();
        $expected = 'q';
        $this->assertEquals($expected, $this->getConsoleOutputContent());
    }

    /*
    public function testExecuteError(): void
    {
        $writer = $this->getWriterInstance();
        $interactor = $this->getMockInstance(Interactor::class, [
            'writer' => $writer
        ]);
        $app = $this->getMockInstance(Application::class, [
            'io' => $interactor
        ]);

        $o = new ServerCommand();
        $o->bind($app);
        $o->parse(['platine', 'config', '-l']);
        $this->assertEquals('config', $o->getName());
        $o->execute();
        $expected = 'a';
        $this->assertEquals($expected, $this->getConsoleOutputContent());
    }
    */

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
