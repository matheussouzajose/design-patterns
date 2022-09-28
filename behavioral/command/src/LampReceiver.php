<?php

namespace Behavioral\Command;

class LampReceiver
{
    public function turnOff()
    {
        var_dump('Lamps off');
    }

    public function turnOn()
    {
        var_dump('Lamps on');
    }
}
