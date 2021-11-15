<?php 

namespace App;


class FiboGen {

    public function __construct() {
    }

    public function fibo_gen() {

        yield 0;
        yield 1;
        yield 1;
    
        $j = 1;
        $i = 1;
        while($i < 377) {
            $ar = $i + $j;
            yield $ar;
            $i = $ar;
            $j = $ar - $j;
        }
    }
    
    public function displayFib_gen() {

        $res = fibo_gen();

        foreach($res as $elem) {
            yield $elem.PHP_EOL;
        }
    }
    
    

}

