<?php 

namespace Aliop700\Converter\Decorator;

interface Handler
{
    public function handle($num): string;
}