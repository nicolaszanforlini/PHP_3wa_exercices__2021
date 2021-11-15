<?php

use PHPUnit\Framework\TestCase;
use Cart\Cart;
use Cart\Product;
use Mock\MockStorage;

class CartTest extends TestCase {

    private Cart $cart;
    private MockStorage $storage;

    // init
    public function setUp() :void {
        $this->storage = new MockStorage;
        $this->cart = new Cart( $this->storage );
    }

    // test instance of cart
    public function testInstanceMockStorage() {

        $this->assertInstanceOf( Cart::class, $this->cart );
    }

    // test total
    public function testTotalMethodeBuy() {

        $this->assertEquals( 0, $this->cart->total() );
        $this->cart->buy( new Product( "test1", 100.0 ), 1 );
        $this->cart->buy( new Product( "test2", 100.0), 1 );
        $this->assertEquals( 240.0, $this->cart->total() );
        $this->assertTrue( is_float( $this->cart->total() ));
    }

    // test reset
    public function testResetMethode() {

        $this->cart->buy( new Product( "test1", 100.0 ), 1 );
        $this->cart->buy( new Product( "test2", 100.0 ), 1 );
        $this->assertEquals( 240.0, $this->cart->total() );
        $this->cart->reset();
        $this->assertEquals( 0, $this->cart->total() );
    }

    // test restore
    public function testRestoreMethode() {

        $p = new Product( "test1", 100.0 );
        $p1 = new Product( "test2", 100.0 );
        $this->cart->buy( $p, 1 );
        $this->cart->buy( $p1, 1 );
        $this->assertEquals( 240.0, $this->cart->total() );
        $this->cart->restore( $p1 );
        $this->assertEquals( 120.0, $this->cart->total() );
    }

    // test new method restore Quantity
    public function testRestoreQuantity() {

        $p = new Product( "test1", 100.0 );
        $this->cart->buy($p, 4);
        $this->assertEquals( 480.0, $this->cart->total() );
        $this->cart->restoreQuantity( $p, 2 );
        $this->assertEquals( 240.0, $this->cart->total() );
    }

    // test 2 new methode restore Quantity 
    public function testRestoreQuantity2() {

        $p = new Product( "test1", 100.0 );
        $this->cart->buy( $p, 4 );
        $this->assertEquals( 480.0, $this->cart->total() );
        $this->cart->restoreQuantity( $p, 5 );
        $this->assertEquals( 0, $this->cart->total() );
    }




}