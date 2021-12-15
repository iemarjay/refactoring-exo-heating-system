<?php

use JetBrains\PhpStorm\Pure;

class Thermostat
{
    #[Pure]
    public function __construct(private Heater $heater, private Temperature $temperature)
    {
    }

    function regulateHeater(float $threshold): void
    {
        if ($this->temperature->toFloat() < $threshold) {
            $this->heater->switchOn();
        } else {
            $this->heater->switchOff();
        }
    }

}
