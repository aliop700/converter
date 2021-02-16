<?php

namespace Aliop700\Converter\Decorator;

use Aliop700\Converter\Decorator\Handler;

abstract class BaseHandler
{
    protected $handler;

    public function __construct($handler)
    {
        $this->handler = $handler;
    }

    abstract public function handle($num): string;

    public function setHandler($handler)
    {
        $this->handler = $handler;
    }
}