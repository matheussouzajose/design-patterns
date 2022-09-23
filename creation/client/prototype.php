<?php

require __DIR__ . "/../../vendor/autoload.php";

use Creation\Prototype\ConcretePrototype;

$original = new ConcretePrototype();
$original->setTitle('PHP Essencial');
$original->setAuthor('Fulando de Tal');

var_dump($original);
echo "</br>";


try {
    $clone1 = clone $original;
    $clone1->setTitle('Nodejs');

    var_dump($clone1);
    echo "</br>";

    $clone2 = clone $original;
    $clone2->setTitle('MongoDB');

    var_dump($clone2);
    echo "</br>";

    $clone3 = clone $clone2;
    $clone3->setTitle('Laravel');

    var_dump($clone3);
    echo "</br>";

} catch (Exception $exception) {
    var_dump($exception->getMessage());
}

