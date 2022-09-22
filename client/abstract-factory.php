<?php

require __DIR__ . "/../vendor/autoload.php";

use AbstractFactory\Products\PublishingCompanyA;
use AbstractFactory\Products\PublishingCompanyB;

$publishingCompanyA = new PublishingCompanyA();
$bookPHP = $publishingCompanyA->makeLanguageBook();
$bookMySql = $publishingCompanyA->makeDatabaseBook();

$publishingCompanyB = new PublishingCompanyB();
$bookNode = $publishingCompanyB->makeLanguageBook();
$bookMongoDB = $publishingCompanyB->makeDatabaseBook();

echo "PHP: {$bookPHP->getTitle()} - {$bookPHP->getAuthor()}";
echo "</br>";
echo "MySql: {$bookMySql->getTitle()} - {$bookMySql->getAuthor()} - {$bookMySql->getPages()}";
echo "</br>";
echo "Nodejs: {$bookNode->getTitle()} - {$bookNode->getAuthor()}";
echo "</br>";
echo "MongoDB: {$bookMongoDB->getTitle()} - {$bookMongoDB->getAuthor()} - {$bookMongoDB->getPages()}";
