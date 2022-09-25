<?php

namespace Structural\Bridge\Book;

class BridgeAuthorTitle extends BridgeBook
{
    public function get(): string
    {
        return $this->implementor->showAuthor() . ' ' . $this->implementor->showTitle();
    }
}
