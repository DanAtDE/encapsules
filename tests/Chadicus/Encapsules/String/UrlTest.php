<?php
namespace Chadicus\Encapsules\String\Tests;

use Chadicus\Encapsules\String\Url;

/**
 * Unit tests for the Chadicus\Encapsules\String\Url class.
 */
final class UrlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior.
     *
     * @test
     * @covers \Chadicus\Encapsules\String\Url::__construct
     * @covers \Chadicus\Encapsules\String\Url::getValue
     *
     * @return void
     */
    public function getValue()
    {
        $this->assertSame('http://www.example.com', (new Url('http://www.example.com'))->getValue());
    }

    /**
     * Verify behavior when invalid data is given as a value.
     *
     * @param mixed $value The invalid constructor value.
     *
     * @test
     * @dataProvider badData
     * @covers \Chadicus\Encapsules\String\Url::__construct
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $value is not a valid url string
     *
     * @return void
     */
    public function constructWithInvalidValue($value)
    {
         new Url($value);
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
            ['www.apartialurl.com'],
            ['not a url'],
        ];
    }
}
