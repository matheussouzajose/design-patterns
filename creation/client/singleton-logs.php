<?php

require __DIR__ . "/../../vendor/autoload.php";

$instance1 = Creation\Singleton\Logs\LogsSingleton::getInstance();
$instance2 = Creation\Singleton\Logs\LogsSingleton::getInstance();

if ($instance1 === $instance2) {
    var_dump("Ok");
}

$instance1->saveLogs([
    'info' => 'Request',
    'message' => 'Bad request'
]);
