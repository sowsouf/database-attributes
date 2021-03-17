<?php


namespace Ssf\Database\Attributes\Type;


class Type
{
    private string $name;
    private string $column;
    private string $length;

    /**
     * @var mixed $default
     */
    private $default;

    private bool $nullable;
    private bool $primary;
    private bool $unique;
    private bool $increment;

    private string $defaultValue = 'ssf__default--value';
    private bool $sizeable = true;

//    private bool $foreign;


    public function __construct(string $name, string $column, $length)
    {
        $this->name = $name;
        $this->column = $column;
        $this->length = $length;

        $this->nullable = false;
        $this->primary = false;
        $this->unique = false;
        $this->increment = false;

        $this->default = $this->defaultValue;
    }

    public function nullable()
    {
        $this->nullable = true;
        $this->default(null);
        return $this;
    }

    public function getNullable(): bool
    {
        return $this->nullable;
    }

    public function primary()
    {
        $this->primary = true;
        $this->default($this->defaultValue);
        return $this;
    }

    public function getPrimary(): bool
    {
        return $this->primary;
    }

    public function unique()
    {
        $this->unique = true;
//        $this->default($this->defaultValue);
        return $this;
    }

    public function increment()
    {
        $this->increment = true;
//        $this->default($this->defaultValue);
        return $this;
    }

    public function getUnique(): bool
    {
        return $this->unique;
    }

    public function default($default)
    {
        $this->default = $default;
        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $sizeable
     */
    public function setSizeable(bool $sizeable): void
    {
        $this->sizeable = $sizeable;
    }


    public function compile()
    {
        $sql = $this->sizeable
            ? sprintf("`%s` %s(%s)", addslashes($this->name), addslashes($this->column), $this->length)
            : sprintf("`%s` %s", addslashes($this->name), addslashes($this->column));
        return $sql
            . ($this->nullable ? '' : ' NOT NULL')
            . ($this->increment ? ' AUTO_INCREMENT' : '')
            . ($this->default === $this->defaultValue ? '' : ' DEFAULT ' . ($this->default ?? 'NULL'))
            . ($this->primary ? ' PRIMARY KEY' : '')
            . ($this->unique ? ' UNIQUE' : '');
    }

}