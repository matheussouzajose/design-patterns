<?php

namespace Factory\Cars\Product;

interface CarProduct
{
    /**
     * @return mixed
     */
    public function speedUp();

    /**
     * @return mixed
     */
    public function brake();

    /**
     * @return mixed
     */
    public function changeGear();
}
