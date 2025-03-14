<?php

namespace Src\TestComponent;

use DumpsterfireComponents\Component;
use DumpsterfireComponents\Interfaces\ISetup;

class TestComponent extends Component implements ISetup
{
    private string $test;

    public function setup(): void
    {
        $this->test = "this is my test component :DDD";
    }

    public function getSomething(): string
    {
        return $this->test;
    }
}