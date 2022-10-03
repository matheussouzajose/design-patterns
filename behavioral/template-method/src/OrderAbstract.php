<?php

namespace Behavioral\TemplateMethod;

abstract class OrderAbstract
{
    public function finalValue($value, $size, $changeValue): string
    {
        $value += $this->freight($size);
        $value += $this->changeValue($changeValue);

        return number_format($value, 2, ',', '.');
    }

    protected abstract function changeValue(int $value) :int;

    protected function freight(int $size) :int
    {
        return 10;
    }
}
