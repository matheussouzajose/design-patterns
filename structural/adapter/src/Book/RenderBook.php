<?php

namespace Structural\Adapter\Book;

class RenderBook
{
    /**
     * @var BooksInterface
     */
    private BooksInterface $books;

    /**
     * @param BooksInterface $books
     */
    public function __construct(BooksInterface $books)
    {
        $this->books = $books;
    }

    /**
     * @return mixed
     */
    public function renderTitleAndName()
    {
        return $this->books->getAuthorAndTitle();
    }
}
