<?php

namespace Behavioral\State;

class LockedDoorState extends AbstractDoorState
{
    /**
     * @return ClosedDoorState
     */
    public function unlock(): ClosedDoorState
    {
        return new ClosedDoorState;
    }
}
