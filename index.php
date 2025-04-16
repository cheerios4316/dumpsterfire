<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfirePages\App\App;
use DumpsterfirePages\Container\Container;
use DumpsterfirePages\Router\DumpsterfireRouter;
use Src\Controllers\SampleController;
use Src\HeaderComponent\HeaderComponent;
use Src\Logger\SomeLogger;

$logger = Container::getInstance()->create(SomeLogger::class);

$app = App::new()
    ->setLogger($logger)
    ->runInitActions();

$router = DumpsterfireRouter::new()
    ->registerRoute('sample-path/{id}', SampleController::class)
    ->registerRoute('/', SampleController::class)
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