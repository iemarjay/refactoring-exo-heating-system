<?php

use JetBrains\PhpStorm\Pure;

class Temperature
{
    private Url $url;

    #[Pure] public function __construct(string $url)
    {
        $this->url = new Url($url);
    }

    public function toFloat(): float
    {
        return (float)($this->url)->getString(4);
    }
}