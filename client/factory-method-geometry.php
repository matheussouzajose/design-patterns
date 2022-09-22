<?php

require __DIR__ . "/../vendor/autoload.php";

use Factory\Geometry\Circle;
use Factory\Geometry\ConcreteCreator;
use Factory\Geometry\Triangle;

class Client
{
    public function __construct()
    {
        $circle = (new ConcreteCreator())->factoryMethod(new Circle());
        echo $circle->getImage();

        echo "</br>";

        $triangle = (new ConcreteCreator())->factoryMethod(new Triangle());
        echo $triangle->getImage();
    }
}

new Client();
