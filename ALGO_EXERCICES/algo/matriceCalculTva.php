<?php


function totalOdd ($el)  {

    $res = 0;
    foreach($el as $e) {
        foreach( $e as $element) {
            if( $element % 2 == 0 ) {
                $res += ($element + ($element * 0.20));
            }
        }
    }
    return $res;
}

$products = [
    [10, 7, 9, 8, 6],
    [15, 17, 4, 18, 3],
    [2, 20, 101, 81, 62],
    [32, 17, 25, 97, 16],
    [5, 17, 10, 5, 10],
 ];

$res = totalOdd($products);
echo $res;

