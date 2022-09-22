<?php

namespace Builder\Sql;

interface BuilderInterface
{
    public function setTable(string $table);
    public function setQuery();
    public function getResult(): Product;
}
