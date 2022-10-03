<?php

namespace Behavioral\Observer\Stock;

class ControlPurchaseRequisitions implements Observer
{
    public function updated(string $code)
    {
        $this->addPurchaseRequisitionList();
    }

    public function addPurchaseRequisitionList()
    {
        echo 'Produto adicionado à lista de requisições de compra';
    }
}
