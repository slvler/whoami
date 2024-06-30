<?php

namespace Slvler\Whoami;

class Whoami
{
    private $api;

    public function __construct($client)
    {
        $this->api = $client;
    }

    public function hello()
    {
        echo "hello";
    }
}
