<?php


namespace Ssf\Database\Attributes\Type;


class Id extends Type
{

    private string $column = 'BIGINT UNSIGNED';

    public function __construct($name)
    {
        parent::__construct($name, $this->column, 0);
        $this->setSizeable(false);
        $this->primary();
        $this->unique();
    }

}