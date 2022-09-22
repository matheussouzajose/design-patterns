<?php

namespace Builder\Sql;

class Product
{
    public string $table;
    public string $query;

    const MYSQL_QUERY = 'SELECT * FROM `%s`;';
    const POSTGRES_QUERY = 'SELECT * FROM %s';

    public function getQuery(): string
    {
        return sprintf($this->query, $this->table);
    }
}
