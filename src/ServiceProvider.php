<?php

use JetBrains\PhpStorm\Pure;

class ServiceProvider
{
    public function createScheduleManager(): ScheduleManager
    {
        return new ScheduleManager($this->createTimer(), $this->createThermostat());
    }

    public function createThermostat(): Thermostat
    {
        return new Thermostat(new Heater('heater.home', 9999), new Temperature("http://probe.home:9999/temp"));
    }

    #[Pure]
    public function createTimer(): Timer
    {
        return new Timer('http://timer.home:9990');
    }
}