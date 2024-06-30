<?php

namespace Slvler\Whoami\Facades;

use Illuminate\Support\Facades\Facade;

class WhoamiFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'whoami';
    }
}
