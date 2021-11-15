<?php

use PHPUnit\Framework\TestCase;

use App\Calculator;
use App\Model;
/*
class DataTest extends TestCase
{
    
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
}
*/

class CalculatotTest extends TestCase {

    protected Calculator $calculator;

    public function setUp():void {

        $this->calculator = new Calculator(1,0);
    }

    public function testAddCalculator() {
        
        $this->assertSame(1., $this->calculator->add(0,1));
        $this->assertSame(2., $this->calculator->add(1,1));
        $this->assertSame(1., $this->calculator->add(1,0));
    }

    public function testDivCalculator() {
        
        $this->assertSame(0., $this->calculator->division(0,1));
        $this->assertSame(1., $this->calculator->division(1,1));
    }

    public function testDivParOCalculator() {
        
        $this->expectExceptionMessage('Impossible de diviser par zéro.');
        $this->expectException(\DivisionByZeroError::class);
        $this->calculator->division(1,0);
    }



}