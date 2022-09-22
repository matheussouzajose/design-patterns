<?php

require __DIR__ . "/../vendor/autoload.php";

use Builder\Sql\Director;
use Builder\Sql\MySqlBuilder;
use Builder\Sql\PostgresBuilder;

$mySql = new MySqlBuilder();
$directorMySql = new Director($mySql);
var_dump($directorMySql->getQuery('users_mysql')->getQuery());

$postgres = new PostgresBuilder();
$directorPostgres = new Director($postgres);
var_dump($directorPostgres->getQuery('users_postgres')->getQuery());
