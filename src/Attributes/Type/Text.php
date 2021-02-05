<?php


namespace Ssf\Database\Attributes\Type;


class Text extends Type
{

    private string $column = 'TEXT';

    /**
     * Varchar constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, $this->column, 0);
        $this->setSizeable(false);
    }
}