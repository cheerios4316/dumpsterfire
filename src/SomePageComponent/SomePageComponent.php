<?php

namespace Src\SomePageComponent;

use DumpsterfireComponents\PageComponent;

class SomePageComponent extends PageComponent
{
    protected string $title = 'Some Page';
    protected array $meta = [
        'title' => 'Some Page',
        'description' => 'This is a page with some content.'
    ];
}