<?php

namespace Src\Logger;

use DumpsterfirePages\Interfaces\LoggerInterface;

class SomeLogger implements LoggerInterface
{
    public function log(string $message): self
    {
        error_log($message);
        return $this;
    }
}