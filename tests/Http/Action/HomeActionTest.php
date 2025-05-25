<?php

declare(strict_types=1);

namespace Platine\Test\App\Http\Action;

use Platine\App\Http\Action\HomeAction;
use Platine\Dev\PlatineTestCase;
use Platine\Framework\App\Application;
use Platine\Framework\Http\Response\TemplateResponse;
use Platine\Http\ServerRequest;
use Platine\Template\Template;

/*
 * @group core
 * @group app
 */
class HomeActionTest extends PlatineTestCase
{
    public function testHandle(): void
    {
        $app = $this->getMockInstance(Application::class);
        $this->expectMethodCallCount($app, 'getStoragePath', 1);

        $request = $this->getMockInstance(ServerRequest::class);
        $this->expectMethodCallCount($request, 'getAttribute', 1);

        $template = $this->getMockInstance(Template::class);
        $this->expectMethodCallCount($template, 'render', 1);

        $o = new HomeAction($template, $app);
        $res = $o->handle($request);

        $this->assertInstanceOf(TemplateResponse::class, $res);
    }
}
