<?php

namespace Src\Controllers;

use DumpsterfireBase\Container\Container;
use DumpsterfirePages\Controller\BaseController;
use DumpsterfirePages\Interfaces\ControllerInterface;
use DumpsterfirePages\Interfaces\IControllerParams;
use DumpsterfirePages\PageComponent;
use Src\SomePageComponent\SomePageComponent;

class SampleController extends BaseController implements ControllerInterface, IControllerParams
{
    protected ?int $id = null;
    public function getResult(): PageComponent
    {
        return Container::getInstance()->create(SomePageComponent::class);
    }

    public function setParams(array $params): IControllerParams
    {
        $this->autoAssignParams($params);
        return $this;
    }

}