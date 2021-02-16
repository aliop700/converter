<?php

namespace Aliop700\Converter\Strategies;

use Aliop700\Converter\Strategies\Converter;

class RecursiveConverter implements Converter
{
    public function execute(int $num): string
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        if ($num <= 26) {
            return $alphabet[$num - 1];
        } else {
            return $this->execute(intdiv($num - 1, 26)) . $alphabet[$num % 26 - 1];
        }

    }
}
