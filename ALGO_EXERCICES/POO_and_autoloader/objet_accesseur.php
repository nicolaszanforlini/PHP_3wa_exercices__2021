<?php

class Personne {

    private $name;
    private $attak;
    private $life;

    private function setName ($n) {
        $this->name = $n;
    }
    private function setAttak ($a) {
        $this->attak = $a;
    }
    private function setLife ($l) {
        $this->life = $l;
    }
    public function getName() : string {
        return $this->name;
    }
    public function getAttak() : int {
        return $this->attak;
    }
    public function getLife() : int {
        return $this->life;
    }
    public function  __construct($n,$a,$l) {
        $this->setName($n);
        $this->setAttak($a);
        $this->setLife($l);
    }

}

$clad = new Personne('Clad', 50, 200);

print_r($clad);



