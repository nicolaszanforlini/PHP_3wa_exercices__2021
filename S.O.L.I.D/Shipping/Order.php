<?php


class Order {

    private Shipping $shipping;
    protected float $weight;

    public function __construct(Shipping $s, float $w) {
        $this->shipping=$s;
        $this->weight=$w;
    }

    public function cost() :float {
        return $this->shipping->getCost($this);
    }
 
}
