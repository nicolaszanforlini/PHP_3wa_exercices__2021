<?php namespace Parking;


final class Car extends Vehicule {

    
    protected string $place;
    protected string $parkAdress;
    protected float $price;



    public function __construct($a,$b) {
        parent::__construct($a,$b);
    }

    public function __toString():string {
        return "Name Vehicule { $this->getName() } , park : { $this->getAdress() } place : { $this->getPlace() }, prix : { $this->getPrice() }".PHP_EOL;
    }

    public function setPlace($p) {
        $this->place = $p;
    }
    public function getPlace() :string {
        return $this->place;
    }
    public function setAdress($a) {
        $this->parkAdress = $a;
    }
    public function getAdress() :string {
        return $this->parkAdress;
    }
    public function setPrice($p) {
        $this->price = $p;
    }
    public function getPrice() :float {
        return $this->price;
    }
    

}


