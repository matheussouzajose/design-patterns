<?php

namespace Builder\Rocket;

class RocketProduct
{
    /** @var float */
    protected float $fuelTank;

    /** @var string */
    protected string $model;

    /** @var int */
    protected int $engineNumbers;

    /* @var int */
    protected int $placesNumbers;

    /**
     * @return string
     */
    public function __toString(): string
    {
        $result = "Foguete Model: {$this->getModel()}\n";
        $result .= "Litros do tanque: {$this->getFuelTank()}\n";
        $result .= "Número de motores: {$this->getEngineNumbers()}\n";
        $result .= "Número de lugares: {$this->getPlacesNumbers()}\n";

        return $result;
    }

    /**
     * @return float
     */
    public function getFuelTank(): float
    {
        return $this->fuelTank;
    }

    /**
     * @param float $fuelTank
     * @return $this
     */
    public function setFuelTank(float $fuelTank): RocketProduct
    {
        $this->fuelTank = $fuelTank;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return $this
     */
    public function setModel(string $model): RocketProduct
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return int
     */
    public function getEngineNumbers(): int
    {
        return $this->engineNumbers;
    }

    /**
     * @param int $engineNumbers
     * @return $this
     */
    public function setEngineNumbers(int $engineNumbers): RocketProduct
    {
        $this->engineNumbers = $engineNumbers;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlacesNumbers(): int
    {
        return $this->placesNumbers;
    }

    /**
     * @param int $placesNumbers
     * @return $this
     */
    public function setPlacesNumbers(int $placesNumbers): RocketProduct
    {
        $this->placesNumbers = $placesNumbers;
        return $this;
    }
}
