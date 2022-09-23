<?php

namespace Creation\AbstractFactory\Products;

/**
 *
 */
class PublishingCompanyB implements AbstractFactory
{
    /**
     * @var BookNode
     */
    protected BookNode $language;
    /**
     * @var BookMongoDB
     */
    protected BookMongoDB $db;

    /**
     *
     */
    public function __construct()
    {
        $this->language = new BookNode();
        $this->db = new BookMongoDB();
    }

    /**
     * @return BookNode
     */
    public function makeLanguageBook(): BookNode
    {
        $this->language->setTitle('PHP Essencial');
        $this->language->setAuthor('Matheus S. Jose');
        return $this->language;
    }

    /**
     * @return BookMongoDB
     */
    public function makeDatabaseBook(): BookMongoDB
    {
        $this->db->setTitle('MySql Essencial');
        $this->db->setAuthor('Matheus S. Jose');
        $this->db->setPage('100');
        return $this->db;
    }
}
