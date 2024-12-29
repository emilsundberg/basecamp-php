<?php

namespace Emil\Basecamp;

use Illuminate\Support\Facades\Facade;

class BasecampFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'basecamp';
    }
}
