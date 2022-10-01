<?php

namespace Behavioral\TemplateMethod;

class DiscountOrder extends OrderAbstract
{
    protected function changeValue(int $value) :int
    {
        return -$value;
    }
}
