<?php

namespace Behavioral\Mediator;

class ClientColleague extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $context)
    {
        echo $context;
    }
}
