<?php

require_once __DIR__ . '/vendor/autoload.php';

use DumpsterfireBase\Container\Container;
use Src\TestComponent\TestComponent;

$container = Container::getInstance();

$container->create(TestComponent::class)->render();
$container->create(TestComponent::class)->render();


$cdm = $container->create(Container::class);

dump($cdm);