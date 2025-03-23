<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\App\App;
use DumpsterfireRouter\Router\DumpsterfireRouter;
use Src\Controllers\SampleController;
use Src\HeaderComponent\HeaderComponent;

$app = App::new()
    ->runInitActions();

$router = DumpsterfireRouter::new()
    ->registerRoute('sample-path/{id}', SampleController::class)
    ->registerRoute('/', SampleController::class)
;

$app
    ->setPageTemplateHeader(HeaderComponent::class)
    ->setRouter($router)
    ->run()
;