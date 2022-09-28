<?php

namespace Behavioral\ChainOfResponsabity;

class Request extends Handler
{
    protected function execute()
    {
        var_dump('Request');
    }
}
