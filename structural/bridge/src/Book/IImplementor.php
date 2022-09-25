<?php

namespace Structural\Bridge\Book;

interface IImplementor
{
    public function showAuthor(): string;
    public function showTitle(): string;
}
