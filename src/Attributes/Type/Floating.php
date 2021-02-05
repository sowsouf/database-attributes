<?php


namespace Ssf\Database\Attributes\Type;


class Floating extends Type
{
    private string $column = 'FLOAT';

    public function __construct(string $name, int $precision = 8, int $scale = 2)
    {
        parent::__construct($name, $this->column, sprintf("%d,%d", $precision, $scale));
    }
}