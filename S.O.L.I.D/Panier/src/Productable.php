<?php namespace Panier;

use Panier\Storable;




Interface Productable {

    public function getPrice() :float;
    public function getName() :string;
    public function setPrice( float $price );


}
