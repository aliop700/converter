<?php

namespace Aliop700\Converter\Decorator;

use Aliop700\Converter\Decorator\BaseHandler;
use Aliop700\Converter\Facades\Converter;

class FloatHandler extends BaseHandler
{

    public function __constuct($handler)
    {
        parent::__construct($handler);
    }

    public function handle($num): string
    {

        $num = round($num,config('converter.decimal'));

        $exactFloat = number_format($num, config('converter.decimal'), '.','');

        $floatToInt = explode('.', $exactFloat )[1]; 

        $numToConvert = intval($floatToInt);
        
        if($numToConvert == 0)
            return '';
            
        return '.' . Converter::convert($numToConvert) . (!empty($this->handler) ? $this->handler->handle($num) : '');
    }

}