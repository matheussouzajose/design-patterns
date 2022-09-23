<?php

require __DIR__ . "/../../vendor/autoload.php";

use Creation\Builder\Rocket\FactoryRocketDirector;
use Creation\Builder\Rocket\RocketModelIBuilder;
use Creation\Builder\Rocket\RocketModelIIBuilder;

$builderRocketModelI = new FactoryRocketDirector(new RocketModelIBuilder());
$builderRocketModelII = new FactoryRocketDirector(new RocketModelIIBuilder());

$builderRocketModelI->buildRocket();
echo $builderRocketModelI->getRocket();

$builderRocketModelII->buildRocket();
echo $builderRocketModelII->getRocket();
