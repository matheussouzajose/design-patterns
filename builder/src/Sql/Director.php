<?php

namespace Builder\Sql;

class Director
{
    private BuilderInterface $builder;

    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getQuery(string $table): Product
    {
        $this->builder->setTable($table);
        $this->builder->setQuery();
        return $this->builder->getResult();
    }
}
