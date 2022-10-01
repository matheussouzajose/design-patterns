<?php

namespace Behavioral\State;

class OpenDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function close(): ClosedDoorState
    {
        return new ClosedDoorState;
    }
}
