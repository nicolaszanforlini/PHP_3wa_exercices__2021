<?php

use PHPUnit\Framework\TestCase;

use App\Fibo;

class FiboTest extends TestCase {

    private Fibo $fibo;

    // init
    public function setUp():void {

        $this->fibo = new Fibo(377);
    }

    // test instance of Fibo
    public function testInstanceFibo() {

        $this->assertInstanceOf( Fibo::class, $this->fibo );
    }

    // test attributes fibo not null
    public function testAttributsNotNull() {

        $this->assertNotNull( $this->fibo->getNumber() );
        $this->assertNotNull( $this->fibo->getArray() );
    }

    // test type attribute fibo
    public function testTypeAttributes( ) {

        $this->assertTrue(is_int( $this->fibo->getNumber() ));
        $this->assertTrue(is_array( $this->fibo->getArray() ));
    }

    // test attribute number in fibo is != 0 && !=1 && !=(< 1)
    public function testAttributNumberFiboNotZeroAndOne() {

        $this->assertNotEquals( 0 ,$this->fibo->getNumber() );
        $this->assertNotEquals( 1 ,$this->fibo->getNumber() );
        $this->assertGreaterThanOrEqual( 1, $this->fibo->getNumber() );
    }

    // test method sum of two element in a array
    public function testSumAddition() {

        $this->fibo->sum();
        $this->assertEquals( 1, $this->fibo->getTmp() );
    }

    // test method to add new element in array
    public function testContainsInArray() {

        $this->fibo->sum();
        $this->fibo->add();
        $this->assertContains( $this->fibo->getTmp(), $this->fibo->getArray() );
    }

    // test last element in array not greater than number attribute
    public function testLastElementInArrayNotGreaterThanNumber() {

        $this->fibo->genererArray();
        $this->assertGreaterThanOrEqual( $this->fibo->getTmp(), $this->fibo->getNumber() );
        //$this->assertGreaterThanOrEqual( 378, $this->n );
    }



}


