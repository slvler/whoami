<?php


namespace Slvler\Whoami\Tests\Feature;


use Slvler\Whoami\Api\WhoamiClient;
use Slvler\Whoami\Tests\Unit\TestCase;
use Slvler\Whoami\Whoami;


class WhoamiTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function test_get()
    {
        $client = new WhoamiClient();
        $record = new Whoami($client, "127.0.0.1");

        $this->assertIsObject($record->result());
    }

    public function test_get_filter()
    {
        $client = new WhoamiClient();
        $filter = new Whoami($client, "127.0.0.1");

        $this->assertIsObject($filter->filter(['status','message','country','zip','query'])->result());
    }

}
