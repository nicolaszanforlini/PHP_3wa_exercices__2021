<?php

class Queue implements ArrayAccess {

    private array $ar = [];

    public function push( ...$i ) {
        
            $this->offsetSet( ...$i );
    }

    public function pop() {

        if( count( $this->ar ) > 0 ) {
            if( count( $this->ar ) > 1 ) {
                print_r( array_shift( $this->ar ) );
            }elseif( count( $this->ar ) == 1 ) {
                print_r( array_shift( $this->ar ) );
                $this->ar = [];
            }
        }else{ 
            $this->ar[] = null;
        }
    }

    public function clear() {
        $this->ar = [];
    }

    public function offsetSet( ...$value ) {

        $t = [];
        foreach( $value as $elem ) {
            $t[] = $elem;
        }
        if( count( $t ) == 2 ) {
            $this->ar[$t[0]] = $t[1];
        }elseif( count( $t ) == 1 ) {
            $this->ar[] = $value[0];
        }else{
            echo "ERROR 1 ou 2 éléments attendu";
            die;
        }
    }

    public function offsetExists( $offset ) {
        return isset( $this->ar[$offset] );
    }

    public function offsetUnset( $offset ) {
        unset( $this->ar[$offset] );
    }

    public function offsetGet( $offset ) {
        return isset( $this->ar[$offset] ) ? $this->ar[$offset] : null;
    }

}
//===============================================================

echo "===== queue with one element =======".PHP_EOL;
$queue = new Queue();
$queue->push(1);
print_r($queue);

echo "===== queue with pop =======".PHP_EOL;
$queue->pop();

echo PHP_EOL."===== new queue after pop =======".PHP_EOL;
print_r($queue);

echo "===== queue after clear =======".PHP_EOL;
$queue->clear();
print_r($queue);

echo "===================================".PHP_EOL;

echo "===== queue with elements =======".PHP_EOL;
$queue2 = new Queue();
$queue2->push(1);
$queue2->push(2);
$queue2->push(3);
$queue2->push(4);
print_r($queue2);

echo "===== queue with pop =======".PHP_EOL;
$queue2->pop();

echo "===== new queue after pop =======".PHP_EOL;
print_r($queue2);

echo "===== queue after clear =======".PHP_EOL;
$queue2->clear();
print_r($queue2);

//=======================================================================

echo "============ Array Acces with key and value ============".PHP_EOL;

echo"======== push ==============".PHP_EOL;
$queue3 = new Queue();
$queue3->push("un",1);
$queue3->push("deux",2);
$queue3->push("trois",3);
$queue3->push("quatres",4);
print_r($queue3);

echo"======== pop =========".PHP_EOL;
$queue3->pop();

echo PHP_EOL."===== new queue after pop =======".PHP_EOL;
print_r($queue3);

echo "===== queue offsetExists =======".PHP_EOL;
echo "bool : ".$queue3->offsetExists("trois").PHP_EOL;

echo "===== queue offsetUnset key 'trois' =======".PHP_EOL;
$queue3->offsetUnset("trois");
print_r($queue3);

echo "===== queue offSetGet =======".PHP_EOL;
print_r("deux : ".$queue3->offsetGet("deux")).PHP_EOL;


echo PHP_EOL."===== queue after clear =======".PHP_EOL;
$queue3->clear();
print_r($queue3);

echo PHP_EOL."==== essai de trois arguments =====".PHP_EOL;
$queue4 = new Queue();
$queue4->push("un",1,3);
print_r($queue4);

