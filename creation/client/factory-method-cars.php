<?php

require __DIR__ . "/../../vendor/autoload.php";

use Creation\Factory\Cars\DodgerFactory;
use Creation\Factory\Cars\TeslaFactory;

$teslaFactory = new TeslaFactory();
$dodgerFactory = new DodgerFactory();

try {
    $teslaModelX = $teslaFactory->createCar('TeslaModelY');
    $teslaModelY = $teslaFactory->createCar('TeslaModelX');

    $dodgerCharger = $dodgerFactory->createCar('charger');
    $dodgerDart = $dodgerFactory->createCar('dart');

    echo $teslaModelX->speedUp() . "</br>";
    echo $teslaModelX->brake() . "</br>";
    echo $teslaModelX->changeGear() . "</br></br>";

    echo $teslaModelY->speedUp() . "</br>";
    echo $teslaModelY->brake() . "</br>";
    echo $teslaModelY->changeGear() . "</br></br>";

    echo $dodgerCharger->speedUp() . "</br>";
    echo $dodgerCharger->brake() . "</br>";
    echo $dodgerCharger->changeGear() . "</br></br>";

    echo $dodgerDart->speedUp() . "</br>";
    echo $dodgerCharger->brake() . "</br>";
    echo $dodgerDart->changeGear() . "</br></br>";
} catch (\Exception $exception) {
    echo $exception->getMessage();
}


