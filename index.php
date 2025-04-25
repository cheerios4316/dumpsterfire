<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfirePages\App\App;
use DumpsterfirePages\Container\Container;
use DumpsterfirePages\Router\DumpsterfireRouter;
use Src\Controllers\SampleController;
use Src\Controllers\SomeApiController;
use Src\HeaderComponent\HeaderComponent;
use Src\Logger\SomeLogger;

$container = Container::getInstance();

$logger = $container->create(SomeLogger::class);
$page404 = $container->create(Some404PageComponent::class);

$app = App::new()
    ->runInitActions()
    ->setLogger($logger)
    ->set404PageComponent($page404)
;

$router = DumpsterfireRouter::new()
    ->registerRoute('sample-path/{id}', SampleController::class)
    ->registerRoute('/', SampleController::class)
    ->registerRoute('api', SomeApiController::class)
;

$otherRouter = DumpsterfireRouter::new()
    ->registerRoute('other', SampleController::class)
;

$router->addRouter($otherRouter);

$app
    ->setPageTemplateHeader(HeaderComponent::class)
    ->setRouter($router)
    ->run()
;