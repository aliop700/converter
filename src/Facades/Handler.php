<?php

namespace Aliop700\Converter\Facades;

use Illuminate\Support\Facades\Facade;

class Handler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aliop700\Converter\Decorator\Handler::class;
    }
}