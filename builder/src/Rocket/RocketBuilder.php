<?php

namespace Builder\Rocket;

abstract class RocketBuilder
{
    protected RocketProduct $rocket;

    public function __construct()
    {
        $this->rocket = new RocketProduct();
    }

    /**
     * @return RocketProduct
     */
    public function getRocket(): RocketProduct
    {
        return $this->rocket;
    }

    /**
     * @return mixed
     */
    abstract public function buildFuelTank();

    /**
     * @return mixed
     */
    abstract public function buildModel();

    /**
     * @return mixed
     */
    abstract public function buildEngineNumbers();

    /**
     * @return mixed
     */
    abstract public function buildPlacesNumbers();
}
