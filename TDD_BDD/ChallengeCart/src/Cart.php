<?php

namespace Cart;

class Cart
{

    // .2 <=> 0.2
    public function __construct(private Storable $storage, private float $tva = .2)
    {
    }

    public function buy(Productable $p, int $quantity): void
    {

        $total = abs($quantity * $p->getPrice() * ($this->tva + 1));

        $this->storage->setValue($p->getName(), $total);
    }

    public function reset(): void
    {
        $this->storage->reset();
    }

    public function restore(Productable $p): void
    {

        $this->storage->restore($p->getName());
    }

    public function total(): float
    {

        return round(array_sum($this->storage->getStorage()), $_ENV['APP_PRECISION'] ?? 3 );
    }

    public function restoreQuantity(Productable $p, int $i): void
    {
        $priceProduct = $p->getPrice()*($this->tva + 1);
        if(array_key_exists($p->getName(), $this->storage->getStorage())) {
            $tmp = $this->storage->getStorage()[$p->getName()];
            $quantity = $tmp / $priceProduct;
            while($i>0) {
                $tmp -= $priceProduct;
                print_r($tmp);
                $i--;
            }
            $quantity = $tmp / $priceProduct;
            $this->restore($p);
            if($quantity>0) $this->buy($p, $quantity);
        } 
    }

}
