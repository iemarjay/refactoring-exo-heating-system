<?php

use JetBrains\PhpStorm\Pure;

class Temperature
{
    private Url $url;

    public function __construct(string $url)
    {
        $this->url = new Url($url);
    }

    #[Pure] public function toFloat(): float
    {
        return (float)($this->url)->getString(4);
    }
}