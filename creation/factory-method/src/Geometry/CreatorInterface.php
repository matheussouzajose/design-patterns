<?php

namespace Creation\Factory\Geometry;

interface CreatorInterface
{
    /**
     * @param ProductInterface $product
     * @return ProductInterface
     */
    public function factoryMethod(ProductInterface $product): ProductInterface;
}
