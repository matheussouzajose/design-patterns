<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\State\Door;
use Behavioral\State\OpenDoorState;
use Behavioral\State\IllegalStateTransitionException;

try {
    $door = new Door(new OpenDoorState);
    var_dump($door->isOpen());

    $door->close();
    var_dump($door->isClosed());

    $door->lock();
    var_dump($door->isLocked());

    $door->lock();
} catch (IllegalStateTransitionException $e) {
    echo 'error: ' . get_class($e);
}
