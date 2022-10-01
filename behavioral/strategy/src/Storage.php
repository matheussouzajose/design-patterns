<?php

namespace Behavioral\Strategy;

interface Storage
{
    public function persist(array $data) :bool;
}
