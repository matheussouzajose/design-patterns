<?php

namespace Structural\Decorator\Character;

class Archer extends Character
{
    public function __construct()
    {
        $this->name = 'Arqueiro';
        $this->attack = 9;
    }
}
