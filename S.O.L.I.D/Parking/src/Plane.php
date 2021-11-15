<?php namespace Parking;


final class Plane extends Vehicule {
    
    private string $nameCategory;

    public function __toString() :string {
        return "Name Vehicule { $this->getName() } , cat: { $this->nameCategory }" . PHP_EOL;
    }

    public function setCagorie( string $name) :void {
        $this->nameCategory = $name;
    }
    
}

