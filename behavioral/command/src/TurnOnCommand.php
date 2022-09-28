<?php

namespace Behavioral\Command;

class TurnOnCommand implements Command
{
    private LampReceiver $receiver;

    public function __construct(LampReceiver $lampReceiver)
    {
        $this->receiver = $lampReceiver;
    }

    public function execute()
    {
        $this->receiver->turnOn();
    }
}
