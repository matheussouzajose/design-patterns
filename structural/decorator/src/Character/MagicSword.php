<?php

namespace Structural\Decorator\Character;

class MagicSword extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 5;
    }
}
