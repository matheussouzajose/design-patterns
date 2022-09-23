<?php

require __DIR__ . "/../../vendor/autoload.php";

use Creation\Factory\Geometry\Circle;
use Creation\Factory\Geometry\ConcreteCreator;
use Creation\Factory\Geometry\Triangle;

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
