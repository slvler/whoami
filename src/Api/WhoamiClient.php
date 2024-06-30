<?php

namespace Slvler\Whoami\Api;

use Illuminate\Support\Facades\Http;

class WhoamiClient implements IWhoami
{
    private $client;
    public function __construct(?Http $client = null)
    {
        $this->client = $client ?? $this->buildClient();
    }

    private function buildClient()
    {
        return new Http();
    }
}
