<?php

// délégation
/*
function inner() {
    yield 1; 
    yield 2; 
    yield 3; 
}

function gen2() {
    yield 1; 
    yield from inner();
    yield 3; 
}

$gen = gen2();

foreach($gen as $elem) {
    echo $elem.PHP_EOL;
}


function genFrom() {
    yield from new ArrayIterator([5, 6]);
    yield 0; 
    yield 4; 
}
*/


function fibo_gen() {

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

$res = fibo_gen();

foreach($res as $elem) {
    echo $elem.PHP_EOL;
}

