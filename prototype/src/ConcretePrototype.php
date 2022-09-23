<?php

namespace Prototype;

use PHPUnit\Util\Exception;

class ConcretePrototype
{
    public string $title;
    public string $author;
    public $counter;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function __clone()
    {
        $this->counter++;

        if ($this->counter > 1) {
            throw new Exception("Você não pode clonar mais de um");
        }
    }
}
