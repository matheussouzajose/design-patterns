<?php

require './../../vendor/autoload.php';

use Structural\Flyweight\FlyweightSoldiers;

$factory = new FlyweightSoldiers();

$soldier1 = $factory->getSoldier(0);
$soldier2 = $factory->getSoldier(1);
$soldier3 = $factory->getSoldier(2);
$soldier4 = $factory->getSoldier(3);
$soldier5 = $factory->getSoldier(4);

$soldier6 = $factory->getSoldier(5);
$soldier7 = $factory->getSoldier(6);
$soldier8 = $factory->getSoldier(7);

var_dump($soldier1, $soldier2, $soldier3, $soldier4, $soldier5);
var_dump($soldier6, $soldier7, $soldier8);
