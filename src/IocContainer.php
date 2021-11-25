<?php

use JetBrains\PhpStorm\Pure;

class IocContainer
{
    #[Pure]
    public static function createTemperature(): Thermostat
    {
        return new Thermostat(new Heater('heater.home', 9999), new Temperature());
    }

    #[Pure]
    public static function timer(): Timer
    {
        return new Timer("http://timer.home:9990");
    }
}