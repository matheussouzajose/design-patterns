<?php

require __DIR__ . "/../vendor/autoload.php";

$buyers = [
    'Matheus S. Jose',
    'Jhuana Lorraine',
    'Ze Bob'
];

$bookPHP = new \Prototype\Book\BookPHPPrototype();
$bookPHP->setTitle('Padrões de projeto em php 7.2');

$books = [];
foreach ($buyers as $buyer) {
    $bookBuyer = clone $bookPHP;
    $bookBuyer->setTitularName($buyer);

    $books[] = $bookBuyer;
}

print_r($books);
