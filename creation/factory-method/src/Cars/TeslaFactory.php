<?php

namespace Creation\Factory\Cars;

use ErrorException;
use Creation\Factory\Cars\Product\CarProduct;

class TeslaFactory implements CarFactory
{

    /**
     * @param string $model
     * @return CarProduct
     * @throws ErrorException
     */
    public function createCar(string $model): CarProduct
    {
        $class = 'Creation\Factory\Cars\Product\\' . ucfirst($model);

        if (!class_exists($class)) {
            throw new ErrorException("Modelo de carro {$model} não existe no sistema.");
        }

        return new $class;
    }
}
