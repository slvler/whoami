<?php

namespace Slvler\Whoami;

use Slvler\Whoami\Api\WhoamiClient;

class WhoamiManager
{
    public function __construct()
    {}
    public function get($ip)
    {
        $client = new WhoamiClient();
        return new Whoami($client, $ip);
    }
}
