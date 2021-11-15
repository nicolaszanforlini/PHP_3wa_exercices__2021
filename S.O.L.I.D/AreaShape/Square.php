<?php

use Area;

class Square implements Area {

    private array $area;

    public function __construct(private float $c) {
    }


    public function sum() :array {

        $area[] = ($this->c)**2;
        return $this->area;
    }

}
