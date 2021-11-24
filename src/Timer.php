<?php

use JetBrains\PhpStorm\Pure;

class Timer
{
    private Url $startHourUrl;
    private Url $endHourUrl;

    #[Pure] public function __construct(private string $baseUrl)
    {
        $this->startHourUrl = new Url("{$this->baseUrl}/start");
        $this->endHourUrl = new Url("{$this->baseUrl}/end");
    }

    private function startHour(): float
    {
        return floatval($this->startHourUrl->getString(5));
    }

    private function endHour(): float
    {
        return floatval($this->endHourUrl->getString(5));
    }

    /**
     * @return bool
     */
    public function isBetweenTimeOfDay(): bool
    {
        return gettimeofday(true) > $this->startHour() && gettimeofday(true) < $this->endHour();
    }

    /**
     * @return bool
     */
    public function isNotBetweenTimeOfDay(): bool
    {
        return gettimeofday(true) < $this->startHour() || gettimeofday(true) > $this->endHour();
    }
}