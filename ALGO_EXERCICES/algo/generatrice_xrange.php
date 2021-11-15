<?php

/*
function genOdd(){
    for ($i = 0; $i <= 10; $i++) {
        if( $i % 2 == 0){
            yield $i;
        }
    }
}

function genOddEntier( $nb ){
    for ($i = 0; $i <= $nb; $i++) {
        if( $i % 2 == 0 ){
            yield $i;
        }
    }
}

$generatorOdd = genOdd();
foreach ($generatorOdd as $value) {
    echo "$value\n";
}

echo PHP_EOL;
echo "=====================";
echo PHP_EOL;

$genOddEnt = genOddEntier(8);
foreach ($genOddEnt as $value2) {
    echo "$value2\n";
}

echo PHP_EOL;
echo "=====================";
echo PHP_EOL;
*/
function xrange (int $start, int $end, int $step) {
    for($s=$start;$s<$end;$s=$s+$step) {
        yield $s;
    }
}

$xrange = xrange(2, 96, 2);

foreach($xrange as $n) {
    echo "$n\n";
}



