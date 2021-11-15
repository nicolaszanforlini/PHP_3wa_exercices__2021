<?php namespace redux_php;


// class action

class Action {

    private string $type;
    private array $state;
    
    private function setType( $type ) { $this->type = $type; }
    private function setState( $state ) { $this->state = $state; }
    public function getType() : string { return $this->type; }
    public function getState() : array { return $this->state; }

    public function __construct( $type, $state ) {
        $this->setType( $type );
        $this->setState( $state );
    }
}






