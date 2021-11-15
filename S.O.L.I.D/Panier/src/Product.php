<?php namespace Panier;


use Panier\Productable;



class Product implements Productable {

    private string $name;
    private float $price;


    public function __construct(string $n, float $p) {
        $this->setName($n);
        $this->setPrice($p);
    }

    public function getPrice() :float {
        return $this->price;
    }
    public function getName() :string {
        return $this->name;
    }
    public function setPrice( float $price ) {
        $this->price = $price;
    }
    public function setName( string $name ) {
        $this->name = $name;
    }


}


