<?php

namespace Teapot;

class Exception
{
    /**
     * Registers the Exception handler within the class to output all exceptions in Teapot format.
     * @return void
     */
    public static function register()
    {
        set_exception_handler(['self', 'handler']);
    }

    /**
     * Handles exceptions in a quiet way for the framework.
     * @return void
     */
    public static function handler($e)
    {
        dump($e);
    }
}
