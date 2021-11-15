<?php namespace Formulaire;



class Formulaire {

    public function __construct(protected array $f) {}

    public function display() :void {
        echo PHP_EOL;
        foreach($this->f as $elem) {
            $elem->to_string();
        }
    }

}