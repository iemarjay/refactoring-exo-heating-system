<?php

class Url
{
    public function __construct(private string $url)
    {
    }

    public function getString(int $length): string
    {
        $c = curl_init();

        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $o = curl_exec($c);

        curl_close($c);

        return substr($o, 0, $length);
    }
}