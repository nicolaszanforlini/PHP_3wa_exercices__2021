<?php namespace redux_php;


// class Reduce

class Reduce extends Store {

    private array $returnCount;

    private function setReturnCount( $init ) { $this->returnCount = $init; }
    protected function getReturnCount() : int { return $this->returnCount['count']; }

    public function __construct ( $i ) { $this->setReturnCount( $i ); }

    protected function getReducer( $type, $action, $returnCount ) {

        switch ( $action ) {
            case "INCREMENT" :
                return $this->returnCount['count'] += $type['number'];
                break;
            case "DECREMENT" :
                return $this->returnCount['count'] -= $type['number'];
                break;
            default : 
                return $type;
        }
    }

}














