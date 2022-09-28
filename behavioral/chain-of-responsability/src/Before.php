<?php

namespace Behavioral\ChainOfResponsabity;

class Before extends Handler
{
    protected function execute()
    {
        var_dump('Antes');
    }
}
