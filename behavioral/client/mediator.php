<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Mediator\ClientColleague as Client;
use Behavioral\Mediator\DatabaseColleague as Database;
use Behavioral\Mediator\ServerColleague as Server;
use Behavioral\Mediator\Mediator;

$client = new Client();
new Mediator($client, new Server(), new Database());

echo $client->request();
