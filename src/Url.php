<?php

class Url
{
    private string|bool $output;

    public function __construct(private string $url)
    {
        $c = curl_init();

        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

        $this->output = curl_exec($c);

        curl_close($c);
    }

    public function getString(int $length): string
    {

        return substr($this->output, 0, $length);
    }
}