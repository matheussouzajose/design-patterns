<?php

namespace Behavioral\Strategy;

class LoggerContext
{
    private Storage $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function setLog($message, $type)
    {
        $this->storage->persist(compact('message', 'type'));
    }
}
