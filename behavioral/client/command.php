<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Command\LampReceiver;
use Behavioral\Command\TurnOffCommand;
use Behavioral\Command\TurnOnCommand;

function invoker(string $commandToExecute)
{
    $commands = [
        TurnOnCommand::class,
        TurnOffCommand::class
    ];

    $similar = 0;

    $finalCommand = null;

    foreach ($commands as $command) {
        similar_text($commandToExecute, $command, $percent);
//        var_dump($commandToExecute, $command, $percent);

        if ($percent > $similar) {
            $similar = $percent;
            $finalCommand = $command;
        }
    }

    if (!$finalCommand) {
        throw new Exception('Command not found');
    }

    return (new $finalCommand(new LampReceiver()))->execute();
}

if (empty($argv[1])) {
    throw new Exception('Command required');
}

try {
    invoker($argv[1]);
} catch (Exception $e) {
    var_dump($e->getMessage());
}
