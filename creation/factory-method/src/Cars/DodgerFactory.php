<?php

namespace Creation\Factory\Cars;

use Creation\Factory\Cars\Product\CarProduct;
use Creation\Factory\Cars\Product\DodgeCharger;
use Creation\Factory\Cars\Product\DodgeDart;
use Creation\Factory\Cars\Product\TeslaModelX;
use Creation\Factory\Cars\Product\TeslaModelY;

class DodgerFactory implements CarFactory
{
    /**
     * @param string $model
     * @return CarProduct
     */
    public function createCar(string $model): CarProduct
    {
        if ($model === 'charger') {
            return new DodgeCharger();
        } elseif ($model === 'dart') {
            return new DodgeDart();
        } else {
            throw new \Error("Modelo de carro {$model} não existe no sistema.");
        }
    }
}
