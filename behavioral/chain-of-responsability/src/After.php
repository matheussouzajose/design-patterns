<?php

namespace Behavioral\ChainOfResponsabity;

class After extends Handler
{
    protected function execute()
    {
        var_dump('Depois');
    }
}
