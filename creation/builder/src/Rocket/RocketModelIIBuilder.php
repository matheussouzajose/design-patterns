<?php

namespace Creation\Builder\Rocket;

class RocketModelIIBuilder extends RocketBuilder
{
    /**
     * @return RocketProduct
     */
    public function buildFuelTank(): RocketProduct
    {
        return $this->rocket->setFuelTank(850);
    }

    /**
     * @return RocketProduct
     */
    public function buildModel(): RocketProduct
    {
        return $this->rocket->setModel('Foguete de Modelo II');
    }

    /**
     * @return RocketProduct
     */
    public function buildEngineNumbers(): RocketProduct
    {
        return $this->rocket->setEngineNumbers(2);
    }

    /**
     * @return RocketProduct
     */
    public function buildPlacesNumbers(): RocketProduct
    {
        return $this->rocket->setPlacesNumbers(6);
    }
}
