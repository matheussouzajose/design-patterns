<?php

require './../../vendor/autoload.php';

use Structural\Facade\EntityFacade;

$facade = new EntityFacade();
//$result = $facade->resolve('Matheus S. Jose');
$result = EntityFacade::resolve('Matheus S. Jose');
var_dump($result);
