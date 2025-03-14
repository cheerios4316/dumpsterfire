<?php

namespace Src\SomePageComponent;
use DumpsterfireBase\Container\Container;
use Src\TestComponent\TestComponent;

/**
 * @var SomePageComponent $this
 */

?>

<div class="some-page-component">
    <?php
    Container::getInstance()->create(TestComponent::class)->render();
    ?>
</div>
