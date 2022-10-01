<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Strategy\DatabaseStorage;
use Behavioral\Strategy\LocalStorage;
use Behavioral\Strategy\LoggerContext;

$db = new DatabaseStorage;
$local = new LocalStorage(__DIR__);

(new LoggerContext($local))->setLog('Erro 404 na url ...', 'danger');
