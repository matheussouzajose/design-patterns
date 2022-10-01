<?php

namespace Behavioral\State;

class ClosedDoorState extends AbstractDoorState
{
    /**
     * @return OpenDoorState
     */
    public function open(): OpenDoorState
    {
        return new OpenDoorState;
    }

    /**
     * @return LockedDoorState
     */
    public function lock(): LockedDoorState
    {
        return new LockedDoorState;
    }
}
