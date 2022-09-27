<?php

namespace Structural\Decorator;

/**
 * Decorator
 */
interface IDecoratorInterface
{
    public function setEntity(IEntityInterface $entity);
    public function operation(): string;
}
