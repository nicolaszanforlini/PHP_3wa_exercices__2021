<?php namespace Inter;


use Inter\Productable;

class Book implements Productable {

    protected string $name;
    protected float $price;

    public function __construct($n, $p) {
        $this->setName($n);
        $this->setPrice($p);
    }

    public function setPrice(float $price) {
        $this->price=$price;
    }
    public function getPrice() :float {
        return $this->price;
    }
    public function setName(string $name) {
        $this->name=$name;
    }
    public function getName() :string {
        return $this->name;
    }


}
