<?php

namespace Behavioral\Interpreter;

class Life implements Interpreter
{
    public Interpreter $fr;
    public Interpreter $con;
    public Interpreter $level;

    public function __construct(Interpreter $fr, Interpreter $con, Interpreter $level)
    {
        $this->fr = $fr;
        $this->con = $con;
        $this->level = $level;
    }

    public function interpret(int $mod = 0): int
    {
        $result = $this->fr->interpret() + $this->con->interpret() + $this->level->interpret();
        $result = $result + 2;
        return ceil($result) + $this->level->interpret() + $mod;
    }
}
