<?php

require './../../vendor/autoload.php';

use Structural\Composite\MigrationDecorator;
use Structural\Composite\OrmDecorator;
use Structural\Composite\User;

$user = new User();

$user->setName('Matheus Souza');

$orm = new OrmDecorator();
$migration = new MigrationDecorator();

$orm->setEntity($user);
$migration->setEntity($user);

var_dump($orm->operation());
var_dump($migration->operation());

