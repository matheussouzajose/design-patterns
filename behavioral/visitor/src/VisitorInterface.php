<?php

namespace Behavioral\Visitor;

interface VisitorInterface
{
    public function convert(ElementAbstract $element);
}
