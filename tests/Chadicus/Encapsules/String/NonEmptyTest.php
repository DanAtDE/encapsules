<?php
namespace Chadicus\Encapsules\String\Tests;

use Chadicus\Encapsules\String\NonEmpty;

/**
 * Unit tests for the Chadicus\Encapsules\String\NonEmpty class.
 */
final class NonEmptyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior.
     *
     * @test
     * @covers \Chadicus\Encapsules\String\NonEmpty::__construct
     * @covers \Chadicus\Encapsules\String\NonEmpty::getValue
     *
     * @return void
     */
    public function getValue()
    {
        $this->assertSame('abc', (new NonEmpty('abc'))->getValue());
    }

    /**
     * Verify behavior when invalid data is given as a value.
     *
     * @param mixed $value The invalid constructor value.
     *
     * @test
     * @dataProvider badData
     * @covers \Chadicus\Encapsules\String\NonEmpty::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $value must be a non-empty string
     *
     * @return void
     */
    public function constructWithInvalidValue($value)
    {
         new NonEmpty($value);
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
        ];
    }
}
