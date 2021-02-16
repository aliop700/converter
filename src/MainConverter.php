<?php 

namespace Aliop700\Converter;

use Aliop700\Converter\Strategies\Converter;

class MainConverter
{
    protected $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    public function convert($num): string
    {
        if($num == 0)
            return '';
        return $this->converter->execute($num);
    }
}