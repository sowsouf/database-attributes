<?php


namespace Ssf\Database\Attributes\Type;


class Decimal extends Type
{
    private string $column = 'DECIMAL';

    public function __construct(string $name, $precision = 8, $scale = 2)
    {
        parent::__construct($name, $this->column, sprintf("%d,%d", $precision, $scale));
    }
}