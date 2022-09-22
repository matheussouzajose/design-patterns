<?php

namespace Builder\Sql;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProductShouldBeReturnStringWithCorrectValuesWhenGetQueryIsCalled()
    {
        $product = new Product();
        $product->table = 'users';
        $product->query = 'SELECT * FROM `%s`;';

        $this->assertEquals('SELECT * FROM `users`;', $product->getQuery());
    }
}
