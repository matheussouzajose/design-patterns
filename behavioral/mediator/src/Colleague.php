<?php

namespace Behavioral\Mediator;

abstract class Colleague
{
    protected MediatorInterface $mediator;

    public function setMediator(MediatorInterface $mediator): Colleague
    {
        $this->mediator = $mediator;
        return $this;
    }
}
