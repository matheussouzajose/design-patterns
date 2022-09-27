<?php

namespace Structural\Decorator\Character;

abstract class CharacterDecorator extends Character
{
    /** @var Character */
    protected Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getName(): string
    {
        return $this->character->getName();
    }

    public function getAttack(): float
    {
        return $this->character->getAttack();
    }
}
