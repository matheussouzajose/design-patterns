<?php

namespace Creation\AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class BookMySqlTest extends TestCase
{
    public function testBookMySqlShouldBeInstanceOfAbstractPublishingCompanyB()
    {
        $bookMySql = new BookMySql();
        $this->assertInstanceOf('Creation\AbstractFactory\Products\AbstractPublishingCompanyB', $bookMySql);
    }

    public function testBookMySqlShouldBeReturnTitleWithCorrectValueWhenSetTitle()
    {
        $bookMySql = new BookMySql();
        $bookMySql->setTitle('MYSQL AVANÇADO');
        $this->assertEquals('MYSQL AVANÇADO', $bookMySql->getTitle());
    }

    public function testBookMySqlShouldBeReturnAuthorWithCorrectValueWhenSetAuthor()
    {
        $bookMySql = new BookMySql();
        $bookMySql->setAuthor('Matheus S. Jose');
        $this->assertEquals('Matheus S. Jose', $bookMySql->getAuthor());
    }

    public function testBookMySqlShouldBeReturnPagesWithCorrectValueWhenSetPages()
    {
        $bookMySql = new BookMySql();
        $bookMySql->setPage('100');
        $this->assertEquals('100', $bookMySql->getPages());
    }
}
