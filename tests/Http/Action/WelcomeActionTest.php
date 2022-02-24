<?php

declare(strict_types=1);

namespace Platine\Test\App\Http\Action;

use Platine\App\Http\Action\WelcomeAction;
use Platine\Dev\PlatineTestCase;
use Platine\Framework\App\Application;
use Platine\Framework\Http\Response\TemplateResponse;
use Platine\Http\ServerRequest;
use Platine\Template\Template;

/*
 * @group core
 * @group app
 */
class WelcomeActionTest extends PlatineTestCase
{
    public function testHandle(): void
    {
        $app = $this->getMockInstance(Application::class);
        $app->expects($this->exactly(1))
                ->method('getStoragePath');

        $request = $this->getMockInstance(ServerRequest::class);
        $request->expects($this->exactly(1))
                ->method('getAttribute');

        $template = $this->getMockInstance(Template::class);

        $template->expects($this->exactly(1))
                ->method('render');

        $o = new WelcomeAction($template, $app);
        $res = $o->handle($request);

        $this->assertInstanceOf(TemplateResponse::class, $res);
    }
}
