<?php

namespace Aliop700\Converter\Strategies;

interface Converter
{
    public function execute(int $num): string;
}