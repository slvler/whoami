<?php

namespace Slvler\Whoami;

use slvler\whoami\Api\WhoamiClient;

class WhoamiManager
{
    public function __construct($app)
    {

    }

    protected function createIpApi()
    {
        $client = new WhoamiClient();

        return new Whoami($client);
    }
}
