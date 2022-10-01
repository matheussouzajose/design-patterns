<?php

namespace Behavioral\Mediator;

interface MediatorInterface
{
    public function sendResult($content);

    public function makeRequest();

    public function queryDb();
}
