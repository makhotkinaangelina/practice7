<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(3, $calculator->add(1, 2));
        $this->assertEquals(0, $calculator->add(1, -1));
        $this->assertEquals(5, $calculator->add(5, 0));
    }
}