<?php


namespace Ssf\Database\Attributes\Type;


class DateTime extends Type
{
    private string $column = 'DATETIME';

    public function __construct(string $name)
    {
        parent::__construct($name, $this->column, 0);
        $this->setSizeable(false);
    }
}