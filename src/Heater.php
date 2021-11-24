<?php

class Heater
{
    public function __construct(public string $address, private int $port)
    {
    }

    public function switch(string $state): void
    {

        try {
            if (!($s = socket_create(AF_INET, SOCK_STREAM, 0))) {
                die('could not create socket');
            }
            if (!socket_connect($s, $this->address, $this->port)) {
                die('could not connect!');
            }
            socket_send($s, $state, strlen($state), 0);
            socket_close($s);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
