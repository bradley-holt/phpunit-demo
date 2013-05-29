<?php

namespace FoundLineTest\PHPUnitDemo;

use FoundLine\PHPUnitDemo\Number;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $fivePointSix = new Number('5.6');
        $this->assertSame(
        	'5.6',
        	(string) $fivePointSix
        );
    }

    /**
     * @depends testToString
     */
    public function testAdd()
    {
        $fivePointSix = new Number('5.6');
        $threePointTwo = new Number('3.2');
        $this->assertSame(
        	'8.8',
        	(string) $fivePointSix->add($threePointTwo)
        );
    }

    /**
     * @depends testToString
     */
    public function testSub()
    {
        $fivePointSix = new Number('5.6');
        $threePointTwo = new Number('3.2');
        $this->assertSame(
        	'2.4',
        	(string) $fivePointSix->sub($threePointTwo)
        );
    }

    /**
     * @depends testToString
     */
    public function testMul()
    {
        $fivePointSix = new Number('5.6');
        $threePointTwo = new Number('3.2');
        $this->assertSame(
        	'17.92',
        	(string) $fivePointSix->mul($threePointTwo)
        );
    }

    /**
     * @depends testToString
     */
    public function testDiv()
    {
        $fivePointSix = new Number('5.6');
        $threePointTwo = new Number('3.2');
        $this->assertSame(
        	'1.75',
        	(string) $fivePointSix->div($threePointTwo)
        );
    }
}
