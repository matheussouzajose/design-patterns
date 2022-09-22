<?php

namespace Factory\Geometry;

class ConcreteCreator implements CreatorInterface
{
    /**
     * @param ProductInterface $product
     * @return ProductInterface
     */
    public function factoryMethod(ProductInterface $product): ProductInterface
    {
        $product->setDirectory('images');
        return $product;
    }
}
