<?php

namespace Structural\Bridge\Book;

abstract class BridgeBook
{
    /**
     * @var mixed
     */
    protected IImplementor $implementor;

    public function __construct(string $author, string $title, string $implementor)
    {
        $this->implementor = new $implementor($author, $title);
        if (is_a($this->implementor, 'Structural\Bridge\IImplementor')) ;
    }

    public abstract function get(): string;
}
