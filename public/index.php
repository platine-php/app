<?php

declare(strict_types=1);

/**
* the directory separator, under windows it is \ and Unix, Linux /
*/

define('DS', DIRECTORY_SEPARATOR);

/**
* The root directory of the application.
*
* you can place this directory outside of your web directory,
 * for example "/home/your_app", etc.
*/
define('ROOT_PATH', dirname(realpath(__DIR__)) . DS);

/**
* The path to the "app" directory.
*
* That contains most of the application files (Action,Entities, Repositories, etc.)
*/
define('APP_PATH', ROOT_PATH . 'app' . DS);

/**
* The path to the configuration directory.
*
* That contains most of the configuration files for your
* application (database, class loading file, functions, etc.)
*/
define('CONFIG_PATH', ROOT_PATH . 'config' . DS);

/**
* The path to the storage directory.
*
* That contains most of the application cache, session, migration, log files
*/
define('STORAGE_PATH', ROOT_PATH . 'storage' . DS);

/**
* The path to the directory of sources external to your application.
*
* If you have already used "composer" you know what that means.
*/
define('VENDOR_PATH', ROOT_PATH . 'vendor' . DS);

/**
* The environment of your application (production, test, development).
*
* if your application is still in development you use the value "dev"
* so you will have the display of the error messages, etc.
* Once you finish the development of your application that is to put it online
* you change this value to "prod" or "testing", in this case there will be deactivation of error messages,
* the loading of the system, will be fast.
*/
define('ENVIRONMENT', 'dev');

require VENDOR_PATH . 'autoload.php';

use Platine\Framework\App\Application;
use Platine\Framework\Kernel\HttpKernel;

$app = new Application();
$app->setConfigPath(CONFIG_PATH)
      ->setRootPath(ROOT_PATH)
      ->setAppPath(APP_PATH)
      ->setVendorPath(VENDOR_PATH)
      ->setStoragePath(STORAGE_PATH)
      ->setEnvironment(ENVIRONMENT);

/** @var HttpKernel $kernel */
$kernel = $app->make(HttpKernel::class);

// let's go.
// Do the magic
$kernel->run();
