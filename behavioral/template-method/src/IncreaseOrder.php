<?php

namespace Behavioral\TemplateMethod;

class IncreaseOrder extends OrderAbstract
{
    protected function changeValue(int $value) :int
    {
        return $value;
    }
}
