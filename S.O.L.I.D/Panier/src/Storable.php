<?php namespace Panier;


Interface Storable {

    public function setValue(string $name, float $price) :void;
    public function reset() :void;
    public function totalStoArr() :float;
    public function restore(string $name) :void;


}
