<?php

namespace Structural\Bridge\Book;

class BridgeTitleAuthor extends BridgeBook
{
    public function get(): string
    {
        return $this->implementor->showTitle() . ' ' . $this->implementor->showAuthor();
    }
}
