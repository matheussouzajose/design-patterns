<?php

namespace Behavioral\Iterator;

class MyIterator implements \Iterator
{
    private int $position = 0;
    private array $array = [];

    public function __construct(array $data)
    {
        $this->array = $data;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}
