<?php

namespace Behavioral\ChainOfResponsabity;

abstract class Handler
{
    private $successor;

    protected abstract function execute();

    public function handlerRequest()
    {
        $this->execute();
        if ($this->successor) {
            $this->successor->handlerRequest();
        }
    }

    public function successor(Handler $successor)
    {
        $this->successor = $successor;
    }

    public function next()
    {
        return $this->successor;
    }
}
