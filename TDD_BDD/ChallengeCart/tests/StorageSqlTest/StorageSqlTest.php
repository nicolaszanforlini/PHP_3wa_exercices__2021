<?php

use PHPUnit\Framework\TestCase;
use Cart\StorageSql;
use Cart\Product;

class StorageSqlTest extends TestCase {
    protected $storageSQL;
    protected $productOne;
    protected static $pdo;
      
    public function setUp() :void {

        $this->productOne = new Product( 'apple', 100 );
        $this->storageSQL = new StorageSQL(self::$pdo);
        $this->storageSQL->reset();
    }

    public static function setUpBeforeClass() :void {
        
        self::$pdo = Connect::connect();
    }

    public static function tearDownAfterClass() :void {

        self::$pdo = Connect::disconnect( self::$pdo );
    }


    /**
     * @test if object storageSQL is instance of StorageSQL
     */
    public function testStorageMySQLTestStorageMySQLTestClass() {

        $this->assertInstanceOf( StorageSQL::class, $this->storageSQL );
    }

    /**
     * @test if total methode calcule sum of storageSQL
     */
    public function testTotal() {

        $this->storageSQL->setValue( 'apple', 10.5 );
        $this->storageSQL->setValue( 'raspberry', 13 );
        $this->assertEquals( 23.5 , $this->storageSQL->total() );
        $this->assertTrue( is_float( $this->storageSQL->total() ));
    }

    /**
     * @test if setValue method insert in storage
     */
    public function testsetValue() {

        $this->storageSQL->setValue( 'apple', 10.5 );
        $this->assertEquals( 10.5 , $this->storageSQL->total() );
    }

    /**
     * @test if reset method reset the storage
     */
    public function testReset() {

        $this->storageSQL->setValue( 'apple', 10.5 );
        $this->storageSQL->setValue( 'raspberry', 13 );
        $this->assertTrue( !empty( $this->storageSQL->total() ));
        $this->storageSQL->reset();
        $this->assertEquals( 0, $this->storageSQL->total() );
        $this->assertTrue( empty($this->storageSQL->total()) );
    }

    /**
     * @test if getStorage method return the storage
     */
    public function testGetStorage() {

        $storage = ['apple' => 10.5, 'raspberry' => 13];
        $this->storageSQL->setValue('apple', 10.5);
        $this->storageSQL->setValue('raspberry', 13);
        $this->assertEquals( $storage, $this->storageSQL->getStorage() );
    }

    /**
     * @test if restore method delete a product
     */
    public function testRestore() {

        $this->storageSQL->reset();
        $this->storageSQL->setValue( 'apple', 10.5 );
        $this->storageSQL->setValue( 'raspberry', 13 );
        $this->storageSQL->restore( 'apple' );
        $this->assertEquals( 13 , $this->storageSQL->total() );
    }



}


