<?php

namespace Slvler\Whoami;

use Slvler\Whoami\Api\WhoamiHttpResponse;

class Whoami
{
    private $client;
    private $ip;
    private $response;
    private $fields;

    public function __construct($client, $ip)
    {
        $this->client = $client;
        $this->ip = $ip;
    }
    public function filter($data = null)
    {
        if ($data){
            $this->fields = implode(',',$data);
        }
        return $this;
    }
    public function get()
    {
        if ($this->fields){
            $this->response = $this->client->getHttpClient()->get($this->ip.'?'.'fields='.$this->fields);
        }else{
            $this->response = $this->client->getHttpClient()->get($this->ip);
        }
    }
    public function result()
    {
        $this->get();
        $value = new WhoamiHttpResponse($this->response);
        return $value->toObject();
    }
}
