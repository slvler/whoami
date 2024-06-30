<?php

namespace Slvler\Whoami\Facades;

use Illuminate\Support\Facades\Facade;

class WhoamiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'whoami';
    }
}
