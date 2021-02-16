<?php

namespace Aliop700\Converter\Facades;

use Illuminate\Support\Facades\Facade;

class Converter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aliop700\Converter\MainConverter::class;
    }
}