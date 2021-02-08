<?php


namespace Ssf\Database\Attributes\Type;


use Ssf\Database\Exceptions\MethodTypePropertyException;

class Boolean extends Type
{
    private string $column = 'TINYINT';

    public function __construct(string $name)
    {
        parent::__construct($name, $this->column, 1);
    }


    /**
     * @param $default
     * @return Boolean
     * @throws MethodTypePropertyException
     */
    public function default($default)
    {
        if (is_bool($default) || in_array($default, [0, 1, true, false]) || is_null($default))
            return is_null($default) ? parent::default(null) : parent::default(intval($default));
        throw new MethodTypePropertyException('boolean', gettype($default));
    }
}