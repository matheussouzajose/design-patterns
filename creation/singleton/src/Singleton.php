<?php

namespace Creation\Singleton;

class Singleton
{
    protected static $instace;

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public static function getInstance(): ConcreteClass
    {
        if (self::$instace === null) {
            self::$instace = new ConcreteClass();
        }

        return self::$instace;
    }
}
