<?php

namespace Structural\Adapter\Book;

class PHPBook
{
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $author;

    /**
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
