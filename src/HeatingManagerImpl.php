<?php

use JetBrains\PhpStorm\Pure;

class HeatingManagerImpl
{
    private Heater $heater;

    #[Pure] public function __construct()
    {
        $this->heater = new Heater('heater.home', 9999);
    }

    function manageHeating(bool $active, float $threshold, float $temperature): void
    {
        if (!$active) {
            return;
        }

        $this->heater->switch($temperature < $threshold ? "on" : "off");
    }

}
