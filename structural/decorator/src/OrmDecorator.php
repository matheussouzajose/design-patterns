<?php

namespace Structural\Decorator;

class OrmDecorator implements IDecoratorInterface
{
    protected IEntityInterface $entity;

    public function setEntity(IEntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public function operation(): string
    {
        return $this->entity->getName() . ' finded in database';
    }
}
