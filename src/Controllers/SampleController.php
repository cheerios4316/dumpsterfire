<?php

namespace Src\Controllers;

use DumpsterfireBase\Container\Container;
use DumpsterfireComponents\PageComponent;
use DumpsterfireRouter\Controller\BaseController;
use DumpsterfireRouter\Interfaces\ControllerInterface;
use DumpsterfireRouter\Interfaces\IControllerParams;
use Src\SomePageComponent\SomePageComponent;

class SampleController extends BaseController implements ControllerInterface, IControllerParams
{
    protected ?int $id = null;
    public function getPage(): PageComponent
    {
        return Container::getInstance()->create(SomePageComponent::class);
    }

    public function setParams(array $params): IControllerParams
    {
        $this->autoAssignParams($params);
        return $this;
    }

}