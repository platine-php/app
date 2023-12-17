<?php

declare(strict_types=1);

namespace Platine\Test\App\Provider;

use Platine\App\Provider\ConsoleServiceProvider;
use Platine\Dev\PlatineTestCase;
use Platine\Framework\App\Application;

/*
 * @group core
 * @group app
 */
class ConsoleServiceProviderTest extends PlatineTestCase
{
    public function testRegister(): void
    {
        $app = $this->getMockInstanceMap(Application::class);

        $this->expectMethodCallCount($app, 'bind', 2);

        $o = new ConsoleServiceProvider($app);
        $o->register();
    }
}
