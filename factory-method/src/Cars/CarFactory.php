<?php

namespace Factory\Cars;

use Factory\Cars\Product\CarProduct;

interface CarFactory
{
    /**
     * @param string $model
     * @return CarProduct
     */
    public function createCar(string $model): CarProduct;
}
