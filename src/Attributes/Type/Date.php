<?php


namespace Ssf\Database\Attributes\Type;


class Date extends Type
{
    private string $column = 'DATE';

    public function __construct(string $name)
    {
        parent::__construct($name, $this->column, 0);
        $this->setSizeable(false);
    }
}