<?php namespace Parking;


abstract class Vehicule {

    protected string $name;
    protected string $category;

    public function __construct( string $n, string $c ) {
        $this->setName( $n );
        $this->setCategory( $c );
    }

    abstract public  function __toString() :string; 

    
    public function setName( $n ) {
        $this->name = $n;
    }
    public function getName() :string {
        return $this->name;
    }
    public function getCategory() :string {
        return $this->category;
    }
    public function setCategory( $c ) {
        $this->category = $c;
    }


}
