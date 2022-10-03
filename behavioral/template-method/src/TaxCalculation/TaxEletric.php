<?php

namespace Behavioral\TemplateMethod\TaxCalculation;

class TaxEletric extends TaxAbstract
{
    protected function calculateVariableTax(float $productPrice): float
    {
        return ($productPrice * 1.2);
    }

    protected function calculateAditionalTax(float $productPrice): float
    {
        return $productPrice - ($productPrice * 0.1);
    }
}
