<?php
namespace Chadicus\Encapsules\String;

/**
 * String wrapper class to ensure the value is a non-empty string.
 */
class NonEmpty extends Chadicus\Encapsules\Object
{
    /**
     * Construct a new NonEmpty object.
     *
     * @param string $value The non-empty string value.
     *
     * @throws \InvalidArgumentException Thrown if $value is not a non-empty string.
     */
    public function __construct($value)
    {
        if (!is_string($value) || trim($value) === '') {
            throw new \InvalidArgumentException('$value must be a non-empty string');
        }

        $this->setValue($value);
    }
}
