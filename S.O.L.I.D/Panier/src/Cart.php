<?php namespace Panier;

use Panier\Productable;
use Panier\Storable;

class Cart {

    private float $tva = 0.20;
    private Storable $storage;

    public function __construct(Storable $s) {
        $this->setStorage($s);
    }

    public function setTva(float $tva) {
        $this->tva = $tva;
    }
    public function setStorage(Storable $storage) {
        $this->storage = $storage;
    }
    public function getTva() {
        return $this->tva;
    }
    public function getStorage() {
        return $this->storage;
    }

    public function buy(Productable $p, int $quantity) :void {

        $res = ($p->getPrice() + $p->getPrice() * $this->tva) * $quantity;
        $this->storage->setValue( $p->getName(), $res);
    }

    public function total() :float {
        
        return $this->storage->totalStoArr();
    }

    public function restore(Productable $p) :void {
        $this->storage->restore($p->getName());
    }


}


