<?php

namespace Factory\Cars\Product;

class TeslaModelY implements CarProduct
{
    /**
     * @return void
     */
    public function speedUp()
    {
        echo 'Acelerando tesla modelo Y';
    }

    /**
     * @return void
     */
    public function brake()
    {
        echo 'Freando tesla modelo Y';
    }

    /**
     * @return void
     */
    public function changeGear()
    {
        echo 'Trocando de marcha tesla modelo Y';
    }
}
