<?php
namespace Chadicus\Encapsules\String;

/**
 * String wrapper class to ensure the value is a valid url.
 */
class Url extends Chadicus\Encapsules\Object
{
    /**
     * Construct a new Url object.
     *
     * @param string $value The url string value.
     *
     * @throws \InvalidArgumentException Thrown if $value is not a valid url string.
     */
    public function __construct($value)
    {
        if (!is_string($value) || filter_var($value, FILTER_VALIDATE_URL) === false) {
             throw new \InvalidArgumentException('$value is not a valid url string');
        }

        $this->setValue($value);
    }
}
