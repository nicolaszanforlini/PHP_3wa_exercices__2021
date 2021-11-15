<?php namespace Panier;


use Panier\Storable;



class StorageArray implements Storable {

    private array $storage = [];

    public function setValue(string $name, float $price) :void {
        if( array_key_exists($name, $this->storage) ) {
            $this->storage[$name] += $price;
        } else {
            $this->storage[$name] = $price;
        }

        
    }

    public function reset() :void {

        $this->storage = [];
    }

    public function totalStoArr() :float {
    
        return array_sum($this->storage);
    }

    public function restore(string $name) :void {
        if( array_key_exists($name, $this->storage) ) {
            unset($this->storage[$name]);
        }
    }



}


