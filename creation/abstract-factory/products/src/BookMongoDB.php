<?php

namespace Creation\AbstractFactory\Products;

/**
 *
 */
class BookMongoDB implements AbstractPublishingCompanyB
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
     * @var string|null
     */
    private ?string $page = null;

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
     * @param $page
     * @return void
     */
    public function setPage($page): void
    {
        $this->page = $page;
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

    /**
     * @return string
     */
    public function getPages(): string
    {
        return $this->page;
    }
}
