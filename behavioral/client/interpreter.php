<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Interpreter\Constitution;
use Behavioral\Interpreter\Force;
use Behavioral\Interpreter\Level;
use Behavioral\Interpreter\Life;

$fr = new Force(14);
$con = new Constitution(13);
$level = new Level(2);

$life = new Life($fr, $con, $level);
var_dump($life->interpret());
var_dump($life->interpret(2));
