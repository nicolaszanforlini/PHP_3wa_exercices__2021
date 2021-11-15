<?php


use Area;

class Rectangle implements Area {

    private array $area;


    public function __construct(
        private float $w, 
        private float $h
    ) {}



    public function sum() :array {

        $area[] = $this->w * $this->h;
        return $this->area;
    }


}
