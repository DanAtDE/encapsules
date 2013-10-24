<?php
namespace Chadicus\Encapsules\Integer;

/**
 * Int wrapper class to ensure positiveness.
 */
class Unsigned
{
    /**
     * The unsigned integer value.
     *
     * @var integer
     */
    private $value;

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

        $this->value = $value;
    }

    /**
     * Returns the unsigned integer value.
     *
     * @return integer
     */
    final public function getValue()
    {
        return $this->value;
    }
}
