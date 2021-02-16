<?php 

namespace Aliop700\Converter\Decorator;

use Aliop700\Converter\Decorator\BaseHandler;
use Aliop700\Converter\Facades\Converter;

class IntegerHandler extends BaseHandler
{

    public function __constuct($handler)
    {
        parent::__construct($handler);
    }

    public function handle($num): string
    {   
        return Converter::convert((int) abs($num)). (!empty($this->handler) ? $this->handler->handle($num) : '');
    }
}