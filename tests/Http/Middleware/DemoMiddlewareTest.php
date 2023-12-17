<?php

declare(strict_types=1);

namespace Platine\Test\App\Http\Middleware;

use Platine\App\Http\Middleware\DemoMiddleware;
use Platine\Dev\PlatineTestCase;
use Platine\Framework\Kernel\HttpKernel;
use Platine\Http\ResponseInterface;
use Platine\Http\ServerRequest;

/*
 * @group core
 * @group app
 */
class DemoMiddlewareTest extends PlatineTestCase
{
    public function testProcess(): void
    {
        $request = $this->getMockInstance(ServerRequest::class);
        $this->expectMethodCallCount($request, 'withAttribute', 1);


        $handler = $this->getMockInstance(HttpKernel::class);
        $this->expectMethodCallCount($handler, 'handle', 1);

        $o = new DemoMiddleware();
        $res = $o->process($request, $handler);

        $this->assertInstanceOf(ResponseInterface::class, $res);
    }
}
