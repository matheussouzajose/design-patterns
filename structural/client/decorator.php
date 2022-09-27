<?php

require './../../vendor/autoload.php';

use Structural\Decorator\MigrationDecorator;
use Structural\Decorator\OrmDecorator;
use Structural\Decorator\User;

$user = new User();

$user->setName('Matheus Souza');

$orm = new OrmDecorator();
$migration = new MigrationDecorator();

$orm->setEntity($user);
$migration->setEntity($user);

var_dump($orm->operation());
var_dump($migration->operation());

