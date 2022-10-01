<?php

namespace Behavioral\Memento;

class Memento
{
    private Entity $obj;

    public function __construct(Entity $obj)
    {
        $this->obj = clone $obj;
    }

    public function getState(): Entity
    {
        return clone $this->obj;
    }
}
