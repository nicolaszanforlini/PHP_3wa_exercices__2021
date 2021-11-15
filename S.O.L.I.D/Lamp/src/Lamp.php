<?php namespace Lamp;


class Lamp {

    
    private Light $light;

    public function __construct(Light $l) {
        $this->light = $l;
    }
    
    public function switch() {
        $this->light->turn();
    }


    public function _display() {

        if( $this->light->getState() ) {
            return "allumer";
        }else {
            return "étint";
        }
    }

}