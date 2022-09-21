<?php

namespace AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class PublishingCompanyATest extends TestCase
{
    public function testPublishingCompanyAShouldBeInstanceOfAbstractFactory()
    {
        $publishingCompanyA = new PublishingCompanyA();
        $this->assertInstanceOf('AbstractFactory\Products\AbstractFactory', $publishingCompanyA);
    }

    public function testPublishingCompanyAShouldBeInstanceOfBookPHPWhenMethodMakeLanguageBookIsCalled()
    {
        $publishingCompanyA = new PublishingCompanyA();
        $this->assertInstanceOf('AbstractFactory\Products\BookPHP', $publishingCompanyA->makeLanguageBook());
    }

    public function testPublishingCompanyAShouldBeInstanceOfBookMySqlWhenMethodMakeDatabaseBookIsCalled()
    {
        $publishingCompanyA = new PublishingCompanyA();
        $this->assertInstanceOf('AbstractFactory\Products\BookMySql', $publishingCompanyA->makeDatabaseBook());
    }
}
