<?php

namespace Creation\Prototype\Book;

abstract class BookPrototype
{
    /** @var string */
    protected string $title;

    /** @var string */
    protected string $subject;

    /** @var string */
    protected string $titularName;

    /**
     * @return mixed
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return $this
     */
    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitularName(): string
    {
        return $this->titularName;
    }

    /**
     * @param string $titularName
     * @return $this
     */
    public function setTitularName(string $titularName): BookPrototype
    {
        $this->titularName = $titularName;
        return $this;
    }
}
