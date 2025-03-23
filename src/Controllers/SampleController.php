<?php

namespace Src\Controllers;

use DumpsterfireBase\Container\Container;
use DumpsterfireComponents\PageComponent;
use DumpsterfireRouter\Interfaces\ControllerInterface;
use Src\SomePageComponent\SomePageComponent;

class SampleController implements ControllerInterface
{
    public function getPage(): PageComponent
    {
        return Container::getInstance()->create(SomePageComponent::class);
    }
}