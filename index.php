<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\Container\Container;
use DumpsterfireComponents\PageTemplate\PageTemplate;
use Src\HeaderComponent\HeaderComponent;
use Src\SomePageComponent\SomePageComponent;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$container = Container::getInstance();

PageTemplate::setHeader(HeaderComponent::class);

$page = $container->create(SomePageComponent::class);
$page->render();