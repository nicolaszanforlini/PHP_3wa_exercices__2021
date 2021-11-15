<?php

use PHPUnit\Framework\TestCase;

use Calc\Calcule;

class CalculeTest extends TestCase {

    private Calcule $calc;

    // init
    public function setUp():void {

        $this->calc = new Calcule;
        $this->calc->resetMemory();
    }

    // test instance of calc
    public function testInstanceCalc() {

        $this->assertInstanceOf( Calcule::class, $this->calc );
    }

    // test add method
    public function testAdd() {

        $nb1 = 5000;
        $nb2 = 2;
        $this->calc->add($nb1, $nb2);
        $this->assertEquals($nb1 + $nb2, $this->calc->lastInMemory());
    }

    // test getMemory
    public function testGetMemory() {
        
        $this->assertTrue(is_array($this->calc->getMemory()));
    }

    // test addition
    public function testAddition() {
            
        $nb1 = 5000;
        $nb2 = 2;
        $nb3 = 510;
        $nb4 = 10;
        $this->calc->add($nb1, $nb2);
        $this->calc->add($nb3, $nb4);
        $this->assertEquals(5522, array_sum($this->calc->getMemory()));
    }

    // test displayMemory if not empty
    public function testDisplayMemory() {
        
        $nb1 = 5000;
        $nb2 = 2;
        $nb3 = 5100;
        $nb4 = 10;
        $this->calc->add($nb1, $nb2);
        $this->calc->add($nb3, $nb4);
        $this->assertEquals(2, count($this->calc->getMemory()));
    }

    // test resetMemory
    public function testResetMemory() {
            
        $nb1 = 5000;
        $nb2 = 2;
        $nb3 = 5100;
        $nb4 = 10;
        $this->calc->add($nb1, $nb2);
        $this->calc->add($nb3, $nb4);
        $this->assertNotEmpty($this->calc->getMemory());
        $this->calc->resetMemory();
        $this->assertEmpty($this->calc->getMemory());
    }



}