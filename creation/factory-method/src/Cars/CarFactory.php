<?php

namespace Creation\Factory\Cars;

use Creation\Factory\Cars\Product\CarProduct;

interface CarFactory
{
    /**
     * @param string $model
     * @return CarProduct
     */
    public function createCar(string $model): CarProduct;
}
