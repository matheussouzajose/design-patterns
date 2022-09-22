<?php

namespace Factory\Cars;

use Factory\Cars\Product\CarProduct;
use Factory\Cars\Product\DodgeCharger;
use Factory\Cars\Product\DodgeDart;
use Factory\Cars\Product\TeslaModelX;
use Factory\Cars\Product\TeslaModelY;

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
