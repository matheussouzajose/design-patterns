<?php

namespace Creation\Singleton;

class ConcreteClass
{
    private int $counter = 0;

    public function __construct()
    {
        var_dump("Construiu");
    }

    public function __clone()
    {
        var_dump("Clonou");
    }

    public function getCounter(): int
    {
        $this->counter++;
        return $this->counter;
    }
}
