<?php

namespace Behavioral\TemplateMethod\TaxCalculation;

abstract class TaxAbstract
{
    private function calculateFirstFixedTax(float $productPrice): float
    {
        return ($productPrice * 1.3);
    }

    private function calculateSecondFixedTax(float $productPrice): float
    {
        return ($productPrice * 1.1);
    }

    abstract protected function calculateVariableTax(float $productPrice): float;

    public function calculateProductTax(float $productPrice): float
    {
        $productPrice = $this->calculateFirstFixedTax($productPrice);
        $productPrice = $this->calculateSecondFixedTax($productPrice);
        $productPrice = $this->calculateAditionalTax($productPrice);
        return $this->calculateVariableTax($productPrice);
    }

    protected function calculateAditionalTax(float $productPrice): float
    {
        return $productPrice;
    }
}
