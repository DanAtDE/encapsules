<?php
namespace Chadicus\Encapsules;

/**
 * Basic object type.
 */
class Object
{
    /**
     * Object value type.
     *
     * @var mixed
     */
    private $value = null;

    /**
     * Setter of _value.
     *
     * @param mixed $value Value to set.
     *
     * @return void
     */
    protected function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Getter of _value.
     *
     * @return mixed
     */
    final public function getValue()
    {
        return $this->value;
    }
}
