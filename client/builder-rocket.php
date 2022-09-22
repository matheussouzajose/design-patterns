<?php

require __DIR__ . "/../vendor/autoload.php";

use Builder\Rocket\FactoryRocketDirector;
use Builder\Rocket\RocketModelIBuilder;
use Builder\Rocket\RocketModelIIBuilder;

$builderRocketModelI = new FactoryRocketDirector(new RocketModelIBuilder());
$builderRocketModelII = new FactoryRocketDirector(new RocketModelIIBuilder());

$builderRocketModelI->buildRocket();
echo $builderRocketModelI->getRocket();

$builderRocketModelII->buildRocket();
echo $builderRocketModelII->getRocket();
