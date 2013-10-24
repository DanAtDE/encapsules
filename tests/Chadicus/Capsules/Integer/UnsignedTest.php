<?php
namespace Chadicus\Capsules\Integer\Tests;

use Chadicus\Capsules\Integer\Unsigned;

/**
 * Unit tests for the Chadicus\Capsules\Integer\Unsigned class.
 */
final class UnsignedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior.
     *
     * @test
     * @covers \Chadicus\Capsules\Integer\Unsigned::__construct
     * @covers \Chadicus\Capsules\Integer\Unsigned::getValue
     *
     * @return void
     */
    public function getValue()
    {
        $this->assertSame(123, (new Unsigned(123))->getValue());
    }

    /**
     * Verify behavior when invalid data is given as a value.
     *
     * @param mixed $value An invalid constructor value.
     *
     * @test
     * @dataProvider badData
     * @covers \Chadicus\Capsules\Integer\Unsigned::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $value must be an integer greater than 0
     *
     * @return void
     */
    public function constructWithInvalidValue($value)
    {
         new Unsigned($value);
    }

    /**
     * Returns array of invalid data for constructor.
     *
     * @return array
     */
    public function badData()
    {
        return [
            [1.0],
            [-23],
            [null],
            ['a string'],
        ];
    }
}
