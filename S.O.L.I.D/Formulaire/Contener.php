<?php namespace Formulaire;


class Contener {

    private array $storage = [];

    public function __construct() {}


    public function addElement(Formulable $f) :void {
        $this->storage[$f->getName()] = $f->getValue();
    }

    public function getElement(string $s) :String {
        foreach($this->storage as $e) {
            if($e == $s) {
                return $e;
            }
        }
    }

}