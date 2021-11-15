<?php

class ShippingBike extends Shipping {

    private float $price = 0;
    

    public function getPrice() :float {
        return $this->price;
    }

    public function getCost(Order $order) :float {
        $this->price=470;
        return $this->price;
    }



}



