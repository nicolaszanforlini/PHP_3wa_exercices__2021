<?php namespace Inter;


class Cart {

    protected array $storage = [];

    public function buy(Productable $p, float $quantity) {
         $s = $p->getPrice() * $quantity;
         $this->storage[] = $s;
    }

    public function total() :float {
        $sum = 0;
        foreach($this->storage as $elem) {
            $sum += $elem;
        }
        return $sum;
    }

}



