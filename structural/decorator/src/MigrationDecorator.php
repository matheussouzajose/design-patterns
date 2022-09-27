<?php

namespace Structural\Decorator;

class MigrationDecorator implements IDecoratorInterface
{
    protected IEntityInterface $entity;

    public function setEntity(IEntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public function operation(): string
    {
        $name = get_class($this->entity);
        $name = explode('\\', $name);
        $name = array_pop($name);
        return strtolower($name) . ' migrated';
    }
}
