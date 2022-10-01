<?php

namespace Behavioral\Interpreter;

class Level implements Interpreter
{
    public int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function interpret(int $mod = 0): int
    {
        return $this->value + $mod;
    }
}
