<?php namespace redux_php;


// class store

class Store {

    private array $state;
    private Reduce $red;
    
    private function setReduce( $reducer ) { $this->red = $reducer; }
    private function setState( $state ) { $this->state = $state; }

    public function __construct( $reducer, $state ) {
        $this->setReduce( $reducer );
        $this->setState( $state );
    }

    public function dispatch( Action $action ) {
        $this->red->getReducer( $action->getState(), $action->getType(), $this->red->getReturnCount() );
        $this->subscribe();
    }

    private function subscribe() {
        echo "initial state : ".$this->state['count'].PHP_EOL;
        echo "new state : ".$this->red->getReturnCount().PHP_EOL;
        echo "==============================".PHP_EOL;
    }

}






