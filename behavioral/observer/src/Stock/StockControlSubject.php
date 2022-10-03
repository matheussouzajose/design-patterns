<?php

namespace Behavioral\Observer\Stock;

class StockControlSubject implements Subject
{
    protected array $observers;

    public function updatedStockProduct(string $code, int $qtde)
    {
        if ($qtde === 0) {
            $this->notificationObserver($code);
        }
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observerRemove): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemove) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notificationObserver(string $code)
    {
        foreach ($this->observers as $observer) {
            $observer->updated($code);
        }
    }
}
