<?php

namespace Src\Controllers;

use DumpsterfirePages\Controllers\ApiController;

class SomeApiController extends ApiController
{
    public function getData(): array
    {
        return ["some" => "data"];
    }
}