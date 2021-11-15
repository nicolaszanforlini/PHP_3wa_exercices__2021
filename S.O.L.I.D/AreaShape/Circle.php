<?php


use Area;



class Circle implements Area {

    private float $pi = 3.14;
    private array $area;

    public function __construct(private float $rayon, ) {
    }


    public function sum() :array {

        $area[] = ($this->rayon * $this->rayon) * $this->pi;
        return $this->area;
    }

}


