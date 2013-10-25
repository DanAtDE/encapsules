<?php
namespace Chadicus\Encapsules\String;

/**
 * String wrapper class to ensure all characters are digits.
 */
class Integer extends Chadicus\Encapsules\Object
{
    /**
     * Construct a new Integer object.
     *
     * @param string $value The integer string.
     *
     * @throws \InvalidArgumentException Thrown if $value is not a string which contains all digits.
     */
    public function __construct($value)
    {
        if (!is_string($value) || preg_match('/^\d+$/', $value) === 0) {
            throw new \InvalidArgumentException('$value must be a string that contains only integers');
        }

        $this->setValue($value);
    }
}
