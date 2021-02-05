<?php


namespace Ssf\Database\Exceptions;


use Throwable;

/**
 * Class MethodTypePropertyException
 * @package Ssf\Database
 */
class MethodTypePropertyException extends \Exception
{
    /**
     * MethodTypePropertyException constructor.
     * @param string $expected
     * @param string $provided
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $expected, string $provided, $code = 0, Throwable $previous = null)
    {
        $message = sprintf("Method type property is not valid. (Expected : %s, Provided : %s)", $expected, $provided);
        parent::__construct($message, $code, $previous);
    }
}