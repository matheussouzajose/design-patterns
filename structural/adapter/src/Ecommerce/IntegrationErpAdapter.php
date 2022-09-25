<?php

namespace Structural\Adapter\Ecommerce;

class IntegrationErpAdapter implements IErpAdapter
{
    private IntegrationErp $integrationErp;

    public function __construct(IntegrationErp $integrationErp)
    {
        $this->integrationErp = $integrationErp;
    }

    public function generateToken(string $apiKey, string $user): string
    {
        return $this->integrationErp->token($apiKey);
    }

    public function sendOrder(Order $order, string $token): bool
    {
        $orderConvertedToArray = $this->convertOrderToArray($order);

        return $this->integrationErp->order($orderConvertedToArray, $token);
    }

    private function convertOrderToArray(Order $order): array
    {
        $orderConvertedToArray = [
            'total_value' => $order->getTotalValue(),
            'code' => $order->getNumberOrder()
        ];

        $producsIterator = new \ArrayIterator($order->getProducts());
        for ($producsIterator->rewind(); $producsIterator->valid(); $producsIterator->next()) {
            $orderConvertedToArray['products'][] = $producsIterator->current();
        }

        return $orderConvertedToArray;
    }
}
