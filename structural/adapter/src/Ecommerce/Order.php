<?php

namespace Structural\Adapter\Ecommerce;

class Order
{
    protected int $numberOrder;

    protected float $totalValue;

    protected array $products;

    /**
     * @return int
     */
    public function getNumberOrder(): int
    {
        return $this->numberOrder;
    }

    /**
     * @param int $numberOrder
     * @return Order
     */
    public function setNumberOrder(int $numberOrder): Order
    {
        $this->numberOrder = $numberOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    /**
     * @param float $totalValue
     * @return Order
     */
    public function setTotalValue(float $totalValue): Order
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return Order
     */
    public function setProducts(array $products): Order
    {
        $this->products = $products;
        return $this;
    }

    public function addProduct(string $order): Order
    {
        $this->products[] = $order;
        return $this;
    }
}
