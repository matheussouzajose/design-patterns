<?php

namespace Structural\Decorator;

/**
 * @decorator Migration
 */
class User implements IEntityInterface
{
    protected string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
