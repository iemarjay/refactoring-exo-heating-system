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
    /**
     * This method is the entry point into the code. You can assume that it is
     * called at regular interval with the appropriate parameters.
     */
    public static function manage(Thermostat $thermostat, string $threshold): void
    {
        if (IocContainer::timer()->isBetweenTimeOfDay()) {
            $thermostat->manageHeating(floatval($threshold));
        }
    }
}
