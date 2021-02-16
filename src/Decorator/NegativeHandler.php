<?php

namespace Aliop700\Converter\Decorator;

use Aliop700\Converter\Decorator\BaseHandler;
use Aliop700\Converter\Facades\Converter;

class NegativeHandler extends BaseHandler
{

    public function __constuct($handler)
    {
        parent::__construct($handler);
    }

    public function handle($num): string
    {
        return (($num < 0 )? '-' : '') . (!empty($this->handler) ? $this->handler->handle($num) : '');
    }
}