<?php

require __DIR__ . "/../../vendor/autoload.php";

$concreteClass = Creation\Singleton\Singleton::getInstance();
var_dump($concreteClass->getCounter());

$antotherConcreteClass = Creation\Singleton\Singleton::getInstance();
var_dump($antotherConcreteClass->getCounter());

var_dump($concreteClass, $antotherConcreteClass);
