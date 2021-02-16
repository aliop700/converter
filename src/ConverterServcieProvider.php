<?php

namespace Aliop700\Converter;

use Aliop700\Converter\Strategies\Factory;
use Illuminate\Support\ServiceProvider;

class ConverterServcieProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Aliop700\Converter\MainConverter::class, function () {

            $converter = Factory::make(config('converter.alg'));

            return new \Aliop700\Converter\MainConverter($converter);

        });

        $this->app->bind(\Aliop700\Converter\Decorator\Handler::class, function () {

            $handler = null;

            if (config('converter.negative')) {
                $handler = new \Aliop700\Converter\Decorator\NegativeHandler(null);
            }

            if ($handler) {
                $handler->setHandler(new \Aliop700\Converter\Decorator\IntegerHandler(config('converter.floats') ? new \Aliop700\Converter\Decorator\FloatHandler(null) : null));
            } else {
                $handler = new \Aliop700\Converter\Decorator\IntegerHandler(config('converter.floats') ? new \Aliop700\Converter\Decorator\FloatHandler(null) : null);
            }

            return $handler;

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/config/converter.php' => config_path('converter.php')
        ]);
    }
}
