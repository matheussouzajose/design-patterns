<?php

namespace Builder\Sql;

use PHPUnit\Framework\TestCase;

class DirectoryTest extends TestCase
{
    public function testDirectoryGetResultShouldBeInstaceOfProduct()
    {
        $mySql = new MySqlBuilder();
        $directorMySql = new Director($mySql);

        $this->assertInstanceOf('Builder\Sql\Product', $directorMySql->getQuery('users_mysql'));
    }

    public function testDirectoryShouldBeReturnQueryMySqlWithCorrectValuesWhenGetQueryIsCalled()
    {
        $mySql = new MySqlBuilder();
        $directorMySql = new Director($mySql);

        $this->assertEquals('SELECT * FROM `users_mysql`;', $directorMySql->getQuery('users_mysql')->getQuery());
    }

    public function testDirectoryShouldBeReturnQueryPostgresWithCorrectValuesWhenGetQueryIsCalled()
    {
        $postgres = new PostgresBuilder();
        $directoryPostgres = new Director($postgres);

        $this->assertEquals('SELECT * FROM users_postgres', $directoryPostgres->getQuery('users_postgres')->getQuery());
    }
}
