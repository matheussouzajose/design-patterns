<?php

namespace AbstractFactory\Products;

/**
 *
 */
class PublishingCompanyA implements AbstractFactory
{
    /**
     * @var BookPHP
     */
    private BookPHP $language;
    /**
     * @var BookMySql
     */
    private BookMySql $db;

    /**
     *
     */
    public function __construct()
    {
        $this->language = new BookPHP();
        $this->db = new BookMySql();
    }

    /**
     * @return BookPHP
     */
    public function makeLanguageBook(): BookPHP
    {
        $this->language->setTitle('PHP Essencial');
        $this->language->setAuthor('Matheus S. Jose');
        return $this->language;
    }

    /**
     * @return BookMySql
     */
    public function makeDatabaseBook(): BookMySql
    {
        $this->db->setTitle('MySql Essencial');
        $this->db->setAuthor('Matheus S. Jose');
        $this->db->setPage('100');
        return $this->db;
    }
}
