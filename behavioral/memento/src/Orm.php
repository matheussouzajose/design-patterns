<?php

namespace Behavioral\Memento;

class Orm
{
    private Entity $entity;
    private $memento;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    public function save(string $name)
    {
        $this->backupToMemento();
        $this->entity->setName($name);
    }

    public function delete()
    {
        $this->backupToMemento();
        unset($this->entity);
    }

    public function find(): string
    {
        if (!empty($this->entity)) {
            return $this->entity->getName();
        }
        return 'no result';
    }

    public function undo()
    {
        $this->entity = $this->memento->getState();
    }

    protected function backupToMemento()
    {
        $this->memento = new Memento($this->entity);
    }
}
