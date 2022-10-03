<?php

namespace Behavioral\TemplateMethod\TaxCalculation;

class TaxClothing extends TaxAbstract
{
    protected function calculateVariableTax(float $productPrice): float
    {
        return ($productPrice * 1.15);
    }
}
