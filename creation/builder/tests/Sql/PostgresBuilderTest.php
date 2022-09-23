<?php

namespace Creation\Builder\Sql;

use PHPUnit\Framework\TestCase;

class PostgresBuilderTest extends TestCase
{

    public function testPostgresBuilderShouldBeInstaceOfBuilderInterface()
    {
        $postgresBuilder = new PostgresBuilder();

        $this->assertInstanceOf('Creation\Builder\Sql\BuilderInterface', $postgresBuilder);
    }

    public function testPostgresBuilderGetResultShouldBeInstaceOfProduct()
    {
        $postgresBuilder = new PostgresBuilder();
        $this->assertInstanceOf('Creation\Builder\Sql\Product', $postgresBuilder->getResult());
    }

    public function testPostgresBuilderSetTableShouldBeReturnWithCorrectValues()
    {
        $postgresBuilder = new PostgresBuilder();
        $postgresBuilder->setTable('postgres');
        $this->assertEquals('postgres', $postgresBuilder->getResult()->table);
    }

    public function testPostgresBuilderSetQueryShouldBeReturnWithCorrectValues()
    {
        $postgresBuilder = new PostgresBuilder();
        $postgresBuilder->setQuery();
        $this->assertEquals('SELECT * FROM %s', $postgresBuilder->getResult()->query);
    }
}
