<?php

namespace Structural\Proxy;

interface PersonInterface
{
    public function __construct($name, $age);

    public function getName();

    public function getAge();
}
