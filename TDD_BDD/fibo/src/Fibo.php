<?php 

namespace App;


class Fibo {

    private int $n;
    private array $tab = [];
    private int $tmp = 0;

    public function __construct( $n ) {
        $this->setNumber( $n );
        $this->tab = [0 ,1];
    }

    public function setNumber( $n ) :void {
        $this->n = $n;
    }
    public function getTmp() :int {
        return $this->tmp;
    }
    public function getNumber() :int {
        return $this->n;
    }
    public function getArray() :array {
        return $this->tab;
    }

    public function sum() :void {

        $this->tmp = $this->tab[count( $this->tab )-1] + $this->tab[count( $this->tab )-2];
    }

    public function add() :void {

        array_push( $this->tab, $this->tmp );
    }

    public function genererArray() :void {

        $i = 0;
        while( $i<$this->getNumber() ) {
            $this->tmp = 0;
            $this->sum();
            if( !$this->tmp  >$this->getNumber() ) {
                $this->add();
            } else {break;}
            $i++;
        }
    }

}




