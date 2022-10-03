<?php

namespace Behavioral\TemplateMethod\TaxCalculation;

class TaxFood extends TaxAbstract
{
    protected function calculateVariableTax(float $productPrice): float
    {
        return $productPrice;
    }
}
