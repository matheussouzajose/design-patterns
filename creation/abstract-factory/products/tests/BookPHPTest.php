<?php

namespace Creation\AbstractFactory\Products;

use PHPUnit\Framework\TestCase;

class BookPHPTest extends TestCase
{
    public function testBookPHPShouldBeInstanceOfAbstractPublishingCompanyA()
    {
        $bookPHP = new BookPHP();
        $this->assertInstanceOf('Creation\AbstractFactory\Products\AbstractPublishingCompanyA', $bookPHP);
    }

    public function testBookPHPShouldBeReturnTitleWithCorrectValueWhenSetTitle()
    {
        $bookPHP = new BookPHP();
        $bookPHP->setTitle('PHP AVANÇADO');
        $this->assertEquals('PHP AVANÇADO', $bookPHP->getTitle());
    }

    public function testBookPHPShouldBeReturnAuthorWithCorrectValueWhenSetAuthor()
    {
        $bookPHP = new BookPHP();
        $bookPHP->setAuthor('Matheus S. Jose');
        $this->assertEquals('Matheus S. Jose', $bookPHP->getAuthor());
    }
}
