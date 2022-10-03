<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\TemplateMethod\TaxCalculation\TaxClothing;
use Behavioral\TemplateMethod\TaxCalculation\TaxEletric;
use Behavioral\TemplateMethod\TaxCalculation\TaxFood;

$food = new TaxFood();
$clothing = new TaxClothing();
$eletric = new TaxEletric();

echo "Preço final de alimentação: {$food->calculateProductTax(10)}";
echo "</br>";

echo "Preço final de vestuário: {$clothing->calculateProductTax(10)}";
echo "</br>";

echo "Preço final de eletrônicos: {$eletric->calculateProductTax(10)}";
echo "</br>";
