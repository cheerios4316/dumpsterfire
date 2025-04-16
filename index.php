<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\App\App;
use DumpsterfireBase\Container\Container;
use DumpsterfirePages\Router\DumpsterfirePages;
use Src\Controllers\SampleController;
use Src\HeaderComponent\HeaderComponent;
use Src\Logger\SomeLogger;

$logger = Container::getInstance()->create(SomeLogger::class);

$app = App::new()
    ->setLogger($logger)
    ->runInitActions();

$router = DumpsterfirePages::new()
    ->registerRoute('sample-path/{id}', SampleController::class)
    ->registerRoute('/', SampleController::class)
;

$otherRouter = DumpsterfirePages::new()
    ->registerRoute('other', SampleController::class)
;

$router->addRouter($otherRouter);

$app
    ->setPageTemplateHeader(HeaderComponent::class)
    ->setRouter($router)
    ->run()
;