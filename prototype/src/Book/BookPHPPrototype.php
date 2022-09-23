<?php

namespace Prototype\Book;

class BookPHPPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('PHP');
    }

    public function __clone()
    {
        echo "Livro PHP clonado";
    }
}
