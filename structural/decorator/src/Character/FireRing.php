<?php

namespace Structural\Decorator\Character;

class FireRing extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 3;
    }
}
