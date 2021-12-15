<?php

/**
 * The system obtains temperature data from a remote source,
 * compares it with a given threshold and controls a remote heating
 * unit by switching it on and off. It does so only within a time
 * period configured on a remote service (or other source)
 *
 * This is purpose-built crap.
 */
class ScheduleManager
{

    public function __construct(private Timer $timer, private Thermostat $thermostat)
    {
    }

    /**
     * This method is the entry point into the code. You can assume that it is
     * called at regular interval with the appropriate parameters.
     */
    public function manage(float $threshold): void
    {
        if ($this->timer->isBetweenTimeOfDay()) {
            $this->thermostat->regulateHeater($threshold);
        }
    }

}
