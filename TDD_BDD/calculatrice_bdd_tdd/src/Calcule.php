<?php namespace Calc;

use Exception;

class Calcule {

    private array $memory = [];

    public function __construct() {}

    public function add( $nb1, $nb2 ) {

        if( ($nb1 + $nb2) < 200 ) {
            throw new Exception("la somme est inferieur a 200");
        } else {
            array_push( $this->memory, $nb1 + $nb2 );
        }
    }

    public function lastInMemory() {

        return end( $this->memory );
    }

    public function getMemory() {

        return $this->memory;
    }

    public function displayMemory() {

        if( empty( $this->memory ) ) {
            throw new Exception( "memory is empty" );
        } else {
            var_dump( $this->memory );
        }
    }

    public function resetMemory() {

        $this->memory = [];
    }

}




