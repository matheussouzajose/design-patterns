<?php

require './../../vendor/autoload.php';

use Structural\Proxy\Proxy;

$person = new Proxy('Matheus S. Jose', 24);

var_dump($person->getName());
var_dump($person->getAge());
