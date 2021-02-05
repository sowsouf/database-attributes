<?php


namespace Ssf\Database\Attributes\Type;


class Varchar extends Type
{

    private string $column = 'VARCHAR';

    /**
     * Varchar constructor.
     * @param string $name
     * @param int $length
     */
    public function __construct(string $name, int $length = 255)
    {
        parent::__construct($name, $this->column, $length);
    }
}