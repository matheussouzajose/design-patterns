<?php

namespace Factory\Cars\Product;

class TeslaModelX implements CarProduct
{
    /**
     * @return void
     */
    public function speedUp()
    {
        echo 'Acelerando tesla modelo X';
    }

    /**
     * @return void
     */
    public function brake()
    {
        echo 'Freando tesla modelo X';
    }

    /**
     * @return void
     */
    public function changeGear()
    {
        echo 'Trocando de marcha tesla modelo X';
    }
}
