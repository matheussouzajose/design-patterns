<?php

require './../../vendor/autoload.php';

use Structural\Adapter\Book\PHPBookAdapter;
use Structural\Adapter\Book\RenderBook;

$book = new PHPBookAdapter(
    "New PHP 8.1",
    "Matheus S. Jose"
);

$render = new RenderBook($book);
var_dump($render->renderTitleAndName());
