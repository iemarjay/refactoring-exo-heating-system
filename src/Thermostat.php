<?php

use JetBrains\PhpStorm\Pure;

class Thermostat
{

    #[Pure]
    public function __construct(private Heater $heater, private Temperature $temperature)
    {
    }

    function manageHeating(float $threshold): void
    {
        $this->heater->switch($this->temperature->toFloat() < $threshold ? "on" : "off");
    }

}
