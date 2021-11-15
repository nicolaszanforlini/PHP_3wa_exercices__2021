<?php namespace Parking;

class Parking {

    private array $list_vehicule = ["parkingTest" => 0, "parkingToto" => 0, "parkingTata" => 0];

public function addPark( Vehicule $v, string $adress, float $p, string $_p ) {
    if( $v->getCategory() == "car" || $v->getCategory() == "bike" ) {
        $v->setAdress( $adress );
        $v->setPrice( $p );
        $v->setPlace( $_p );
        $this->list_vehicule[$adress] += 1;
    }
}

public function removePark( Vehicule $v ) {
    if( $this->list_vehicule[$v->getAdress()] > 0 ) {
        $this->list_vehicule[$v->getAdress()] -= 1;
    }
}

public function count() :void {
    print_r($this->list_vehicule);
    }

}


