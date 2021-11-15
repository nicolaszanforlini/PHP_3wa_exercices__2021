<?php

class ShippingFeet extends Shipping {

    private float $price = 0;

    public function getPrice() :float {
        return $this->price;
    }

    public function getCost(Order $order) :float {
        $this->price=320;
        return $this->price;
    }




}
