<?php

namespace Slvler\Whoami\Api;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

class WhoamiClient implements IWhoami
{
    private Client $httpClient;
    public function __construct(?Client $client = null)
    {
        $this->httpClient = new Client(
            ['base_uri' => 'http://ip-api.com/json/']
        );

    }
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
}
