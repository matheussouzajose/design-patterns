<?php

namespace Behavioral\Observer\Stock;

class EmailObserver implements Observer
{
    public function updated(string $code)
    {
        $this->sendEmailOutOfStock();
    }

    public function sendEmailOutOfStock()
    {
        echo 'Email enviado para o setor de compras';
    }
}
