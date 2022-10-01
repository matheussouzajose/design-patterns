<?php

namespace Behavioral\Memento;

class Entity
{
    private string $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
