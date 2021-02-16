<?php

namespace Aliop700\Converter\Strategies;

use Aliop700\Converter\Strategies\Converter;
use Aliop700\Converter\Strategies\ItertativeConverter;
use Aliop700\Converter\Strategies\RecursiveConverter;

class Factory
{
    public static function make(string $alg): Converter
    {
        $converter;

        switch ($alg) {
            case 'iterative':
                $converter = new ItertativeConverter();
                break;
            case 'recursive':
                $converter = new RecursiveConverter();
                break;
            default:
                throw new \Excpetion;
        }

        return $converter;
    }
}
