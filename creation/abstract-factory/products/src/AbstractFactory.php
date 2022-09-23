<?php

namespace Creation\AbstractFactory\Products;

/**
 *
 */
interface AbstractFactory
{
    /**
     * @return mixed
     */
    public function makeLanguageBook();

    /**
     * @return mixed
     */
    public function makeDatabaseBook();
}
