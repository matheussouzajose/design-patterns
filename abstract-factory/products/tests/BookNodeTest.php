<?php

namespace AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class BookNodeTest extends TestCase
{
    public function testBookNodeShouldBeInstanceOfAbstractPublishingCompanyA()
    {
        $bookNode = new BookNode();
        $this->assertInstanceOf('AbstractFactory\Products\AbstractPublishingCompanyA', $bookNode);
    }

    public function testBookNodeShouldBeReturnTitleWithCorrectValueWhenSetTitle()
    {
        $bookNode = new BookNode();
        $bookNode->setTitle('NODE AVANÇADO');
        $this->assertEquals('NODE AVANÇADO', $bookNode->getTitle());
    }

    public function testBookNodeShouldBeReturnAuthorWithCorrectValueWhenSetAuthor()
    {
        $bookNode = new BookNode();
        $bookNode->setAuthor('Matheus S. Jose');
        $this->assertEquals('Matheus S. Jose', $bookNode->getAuthor());
    }
}
