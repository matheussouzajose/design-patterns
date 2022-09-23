<?php

namespace Creation\Factory\Cars\Product;

class DodgeCharger implements CarProduct
{
    /**
     * @return void
     */
    public function speedUp()
    {
        echo 'Acelerando Dodge Charger';
    }

    /**
     * @return void
     */
    public function brake()
    {
        echo 'Freando Dodge Charger';
    }

    /**
     * @return void
     */
    public function changeGear()
    {
        echo 'Trocando de marcha Dodge Charger';
    }
}
