<?php

namespace Creation\AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class PublishingCompanyBTest extends TestCase
{
    public function testPublishingCompanyBShouldBeInstanceOfAbstractFactory()
    {
        $publishingCompanyB = new PublishingCompanyB();
        $this->assertInstanceOf('Creation\AbstractFactory\Products\AbstractFactory', $publishingCompanyB);
    }

    public function testPublishingCompanyBShouldBeInstanceOfBookPHPWhenMethodMakeLanguageBookIsCalled()
    {
        $publishingCompanyB = new PublishingCompanyB();
        $this->assertInstanceOf('Creation\AbstractFactory\Products\BookNode', $publishingCompanyB->makeLanguageBook());
    }

    public function testPublishingCompanyBShouldBeInstanceOfBookMySqlWhenMethodMakeDatabaseBookIsCalled()
    {
        $publishingCompanyB = new PublishingCompanyB();
        $this->assertInstanceOf('Creation\AbstractFactory\Products\BookMongoDB', $publishingCompanyB->makeDatabaseBook());
    }
}
