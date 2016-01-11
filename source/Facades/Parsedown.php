<?php

namespace LaravelParsedown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Parsedown.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class Parsedown extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'parsedown';
    }
}
