<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\Container\Container;
use Src\TestComponent\TestComponent;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$container = Container::getInstance();

$container->create(TestComponent::class)->render();
$container->create(TestComponent::class)->render();

?>
