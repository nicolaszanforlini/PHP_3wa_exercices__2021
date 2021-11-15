<?php


echo PHP_EOL;
echo "================================================";
echo PHP_EOL;
//======================================================

// reduce

// function subtract
$sub = function ($r, $nb) : int {
    $r -= $nb;
    return $r;
};

// function sum
$sum = function ($r, $nb) : int {
    $r += $nb;
    return $r;
};

// reduce
function reduce(array $t, callable $f, $init = 0) {
    foreach($t as $n) {
        $init = $f($init, $n);
    }
    return $init;
}

$numbers = [1,2,3,4,5,6];

$resultSum = reduce($numbers, $sum);
echo "result sum = ".$resultSum;
echo PHP_EOL;
echo "=============================";
echo PHP_EOL;
$resultSub = reduce($numbers, $sub, 40);
echo "result sub = ".$resultSub;
echo PHP_EOL;
echo "=============================";
echo PHP_EOL;







