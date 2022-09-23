<?php

require __DIR__ . "/../vendor/autoload.php";

$concreteClass = \Singleton\Singleton::getInstance();
var_dump($concreteClass->getCounter());

$antotherConcreteClass = \Singleton\Singleton::getInstance();
var_dump($antotherConcreteClass->getCounter());

var_dump($concreteClass, $antotherConcreteClass);
