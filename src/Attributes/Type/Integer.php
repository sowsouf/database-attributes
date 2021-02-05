<?php


namespace Ssf\Database\Attributes\Type;


class Integer extends Type
{

    private string $column = 'INT';

    public function __construct($name)
    {
        parent::__construct($name, $this->column, 0);
        $this->setSizeable(false);
    }

}