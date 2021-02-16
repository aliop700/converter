<?php

namespace Aliop700\Converter\Strategies;

use Aliop700\Converter\Strategies\Converter;

class ItertativeConverter implements Converter
{
    public function execute(int $num): string
    {
        $name = '';
        
        while($num > 0)
        {
            $mod = ($num - 1) % 26;
            $name = chr(65 + $mod) . $name;
            $num = intdiv($num - $mod, 26); 
        }

        return $name;
    }
}
