<?php

/**
 * Laravel Parsedown
 * This file allows you to bind settings to the Parsedown instance.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
return [

    'links'      => env('PARSEDOWN_LINKS', true),
    'linebreaks' => env('PARSEDOWN_LINEBREAKS', true),
    'escaped'    => env('PARSEDOWN_ESCAPE_HTML', false),

];