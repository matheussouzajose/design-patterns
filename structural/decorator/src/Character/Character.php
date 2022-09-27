<?php

namespace Structural\Decorator\Character;

abstract class Character
{
    protected float $attack;
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): float
    {
        return $this->attack;
    }
}
