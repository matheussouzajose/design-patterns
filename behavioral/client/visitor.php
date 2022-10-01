<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Visitor\StringElement;
use Behavioral\Visitor\UpperCaseVisitor;
use Behavioral\Visitor\LowerCaseVisitor;

$element = new StringElement;
$element->setValue('Erik Figueiredo');
$element->accept(new LowerCaseVisitor);
var_dump($element->getValue());
