<?php


namespace Ssf\Database\Attributes\Type;


class Char extends Type
{
    private string $column = 'CHAR';

    public function __construct(string $name, $length = 1)
    {
        parent::__construct($name, $this->column, $length);
    }
}