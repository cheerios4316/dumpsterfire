<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\Container\Container;
use DumpsterfireComponents\PageTemplate\PageTemplate;
use DumpsterfireRouter\Router\DumpsterfireRouter;
use Src\Controllers\SampleController;
use Src\HeaderComponent\HeaderComponent;
use Src\SomePageComponent\SomePageComponent;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

$container = Container::getInstance();
/*
$page = $container->create(SomePageComponent::class);
$page->render();*/

PageTemplate::setHeader(HeaderComponent::class);

$router = $container->create(DumpsterfireRouter::class);


$router
->registerRoute('/sample-path/sample-page', SampleController::class)
;

$controller = $router->getControllerFromRoute($_SERVER['REQUEST_URI']);

$controller->getPage()->render();