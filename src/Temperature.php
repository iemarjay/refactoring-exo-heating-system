<?php

class Temperature
{
    public function __construct(private string $url = "http://probe.home:9999/temp")
    {
    }

    public function toFloat(): float
    {
        return (float)(new Url($this->url))->getString(4);
    }
}