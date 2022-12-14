<?php

namespace Behavioral\Mediator;

class ServerColleague extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResult("Hello " . $data);
    }
}
