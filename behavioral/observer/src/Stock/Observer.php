<?php

namespace Behavioral\Observer\Stock;

interface Observer
{
    public function updated(string $code);
}
