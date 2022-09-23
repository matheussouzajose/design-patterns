<?php

namespace Creation\Builder\Sql;

use PHPUnit\Framework\TestCase;

class MySqlBuilderTest extends TestCase
{

    public function testMySqlBuilderShouldBeInstaceOfBuilderInterface()
    {
        $mysqlBuilder = new MySqlBuilder();

        $this->assertInstanceOf('Creation\Builder\Sql\BuilderInterface', $mysqlBuilder);
    }

    public function testMySqlBuilderGetResultShouldBeInstaceOfProduct()
    {
        $mysqlBuilder = new MySqlBuilder();
        $this->assertInstanceOf('Creation\Builder\Sql\Product', $mysqlBuilder->getResult());
    }

    public function testMySqlBuilderSetTableShouldBeReturnWithCorrectValues()
    {
        $mysqlBuilder = new MySqlBuilder();
        $mysqlBuilder->setTable('postgres');
        $this->assertEquals('postgres', $mysqlBuilder->getResult()->table);
    }

    public function testMySqlBuilderSetQueryShouldBeReturnWithCorrectValues()
    {
        $mysqlBuilder = new MySqlBuilder();
        $mysqlBuilder->setQuery();
        $this->assertEquals('SELECT * FROM `%s`;', $mysqlBuilder->getResult()->query);
    }
}
