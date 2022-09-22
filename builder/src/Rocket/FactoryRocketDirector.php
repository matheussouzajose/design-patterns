<?php

namespace Builder\Rocket;

class FactoryRocketDirector
{
    protected RocketBuilder $rocketBuilder;

    public function __construct(RocketBuilder $rocketBuilder)
    {
        $this->rocketBuilder = $rocketBuilder;
    }

    public function buildRocket()
    {
        $this->rocketBuilder->buildModel();
        $this->rocketBuilder->buildEngineNumbers();
        $this->rocketBuilder->buildFuelTank();
        $this->rocketBuilder->buildPlacesNumbers();
    }

    public function getRocket(): RocketProduct
    {
        return $this->rocketBuilder->getRocket();
    }
}
