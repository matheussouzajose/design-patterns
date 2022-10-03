<?php

namespace Behavioral\Observer\Stock;

interface Subject
{
    public function addObserver(Observer $observer);

    public function removeObserver(Observer $observerRemove);

    public function notificationObserver(string $code);
}
