<?php namespace Parking;


class Ferry {

    private Parking $parking;

    public function __contruct( Parking $p ) {
        $this->setParking( $p );
    }

    public function setParking( $p ) {
        $this->parking = $p;
    }
    public function getParking() :Parking {
        return $this->parking;
    }

}