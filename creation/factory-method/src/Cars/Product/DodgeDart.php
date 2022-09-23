<?php

namespace Creation\Factory\Cars\Product;

class DodgeDart implements CarProduct
{
    /**
     * @return void
     */
    public function speedUp()
    {
        echo 'Acelerando Dodge Dart';
    }

    /**
     * @return void
     */
    public function brake()
    {
        echo 'Freando Dodge Dart';
    }

    /**
     * @return mixed|void
     */
    public function changeGear()
    {
        echo 'Trocando de marcha Dodge Dart';
    }
}
