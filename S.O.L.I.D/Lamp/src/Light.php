<?php namespace Lamp;


class Light {

    private bool $active = false;

    public function getState() :bool {
        return $this->active;
    }

    public function turn() {
        if( $this->active ) {
            $this->active=false;
        } elseif ( !$this->active ) {
            $this->active=true;
        }
    }

}



