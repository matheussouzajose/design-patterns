<?php

namespace AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class BookMongoDBTest extends TestCase
{
    public function testBookMongoDBShouldBeInstanceOfAbstractPublishingCompanyB()
    {
        $bookMongoDB = new BookMongoDB;
        $this->assertInstanceOf('AbstractFactory\Products\AbstractPublishingCompanyB', $bookMongoDB);
    }

    public function testBookMongoDBShouldBeReturnTitleWithCorrectValueWhenSetTitle()
    {
        $bookMongoDB = new BookMongoDB;
        $bookMongoDB->setTitle('MONGODB AVANÇADO');
        $this->assertEquals('MONGODB AVANÇADO', $bookMongoDB->getTitle());
    }

    public function testBookMongoDBShouldBeReturnAuthorWithCorrectValueWhenSetAuthor()
    {
        $bookMongoDB = new BookMongoDB;
        $bookMongoDB->setAuthor('Matheus S. Jose');
        $this->assertEquals('Matheus S. Jose', $bookMongoDB->getAuthor());
    }

    public function testBookMongoDBShouldBeReturnPagesWithCorrectValueWhenSetPages()
    {
        $bookMongoDB = new BookMongoDB;
        $bookMongoDB->setPage('100');
        $this->assertEquals('100', $bookMongoDB->getPages());
    }
}
