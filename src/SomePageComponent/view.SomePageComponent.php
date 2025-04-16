<?php

namespace Src\SomePageComponent;
use DumpsterfirePages\Container\Container;
use Src\TestComponent\TestComponent;

/**
 * @var SomePageComponent $this
 */

?>

<div class="some-page-component">
    <?php
    Container::getInstance()->create(TestComponent::class)->render();
    Container::getInstance()->create(TestComponent::class)->render();
    ?>
</div>
