<?php

namespace Structural\Adapter\Book;

class PHPBookAdapter implements BooksInterface
{
    /**
     * @var PHPBook
     */
    private PHPBook $book;

    /**
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        $this->book = new PHPBook($title, $author);
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle(): string
    {
        return $this->book->getTitle() . ' By ' . $this->book->getAuthor();
    }
}
