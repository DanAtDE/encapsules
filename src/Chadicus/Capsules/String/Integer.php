<?php
namespace Chadicus\Capsules\String;

/**
 * String wrapper class to ensure all characters are digits.
 */
class Integer
{
    /**
     * The integer string value.
     *
     * @var string
     */
    private $value;

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

        $this->value = $value;
    }

    /**
     * Returns the integer string value.
     *
     * @return string
     */
    final public function getValue()
    {
        return $this->value;
    }
}
