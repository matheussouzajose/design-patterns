<?php

namespace Behavioral\Visitor;

class UpperCaseVisitor implements VisitorInterface
{
    public function convert(ElementAbstract $element)
    {
        $value = $element->getValue();
        $element->setValue(strtoupper($value));
    }
}
