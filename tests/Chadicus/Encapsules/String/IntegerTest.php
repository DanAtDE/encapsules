<?php
namespace Chadicus\Encapsules\String\Tests;

use Chadicus\Encapsules\String\Integer;

/**
 * Unit tests for the Chadicus\Encapsules\String\Integer class.
 */
final class IntegerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior.
     *
     * @test
     * @covers \Chadicus\Encapsules\String\Integer::__construct
     * @covers \Chadicus\Encapsules\String\Integer::getValue
     *
     * @return void
     */
    public function getValue()
    {
        $this->assertSame('123', (new Integer('123'))->getValue());
    }

    /**
     * Verify behavior when invalid data is given as a value.
     *
     * @param mixed $value An invalid constructor value.
     *
     * @test
     * @dataProvider badData
     * @covers \Chadicus\Encapsules\String\Integer::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $value must be a string that contains only integers
     *
     * @return void
     */
    public function constructWithInvalidValue($value)
    {
         new Integer($value);
    }

    /**
     * Returns array of invalid data for constructor.
     *
     * @return array
     */
    public function badData()
    {
        return [
            [''],
            ["\n \t"],
            [null],
            ['1.0'],
            ['not an integer'],
        ];
    }
}
