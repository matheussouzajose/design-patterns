<?php

namespace Creation\AbstractFactory\Products;

/**
 *
 */
class BookNode implements AbstractPublishingCompanyA
{
    /**
     * @var string|null
     */
    private ?string $title = null;
    /**
     * @var string|null
     */
    private ?string $author = null;

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param $author
     * @return void
     */
    public function setAuthor($author): void
    {
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
