<?php

namespace Slvler\Whoami\Tests\Unit;

use Slvler\Whoami\WhoamiServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            WhoamiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
