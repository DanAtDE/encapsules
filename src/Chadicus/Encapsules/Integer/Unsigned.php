<?php
namespace Chadicus\Encapsules\Integer;

/**
 * Int wrapper class to ensure positiveness.
 */
class Unsigned extends Chadicus\Encapsules\Object
{
    /**
     * Construct a new Unsigned object.
     *
     * @param integer $value The unsigned integer.
     *
     * @throws \InvalidArgumentException Thrown if $value is not a positive integer.
     */
    public function __construct($value)
    {
        if (!is_int($value) || $value < 0) {
            throw new \InvalidArgumentException('$value must be an integer greater than 0');
        }

        $this->setValue($value);
    }
}
