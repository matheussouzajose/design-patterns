<?php

namespace Builder\Rocket;

class RocketModelIBuilder extends RocketBuilder
{
    /**
     * @return RocketProduct
     */
    public function buildFuelTank(): RocketProduct
    {
        return $this->rocket->setFuelTank(1000);
    }

    /**
     * @return RocketProduct
     */
    public function buildModel(): RocketProduct
    {
        return $this->rocket->setModel('Foguete de Modelo I');
    }

    /**
     * @return RocketProduct
     */
    public function buildEngineNumbers(): RocketProduct
    {
        return $this->rocket->setEngineNumbers(3);
    }

    /**
     * @return RocketProduct
     */
    public function buildPlacesNumbers(): RocketProduct
    {
        return $this->rocket->setPlacesNumbers(8);
    }
}
