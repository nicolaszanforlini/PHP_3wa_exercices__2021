<?php

/*    
function permut() {
    $a = 1;
    $b = 2;
    $c = 3;
    echo "a = ".$a." b =".$b." c = ".$c;
    echo " //////// ";
    $tmp = $a;
    $a = $c;
    $c = $b;
    $b = $tmp;
    echo "a = ".$a." b = ".$b." c = ".$c;
}

permut();
*/


/*
function increment_static()
{
    static $a = 0;
    echo $a;
    $a++;
}

increment_static();
echo PHP_EOL;
increment_static();
echo PHP_EOL;
increment_static();
*/


/*
function fibo_static() {

    $nb1 = 0;
    $nb2 = 1;
    $cpt = 0;
    while( $sum != 377) {
        echo " ".$nb1;
        $sum = $nb1 + $nb2;
        $nb1 = $nb2;
        $nb2 = $sum;
        $cpt += 1;
    }
}
fibo_static();
*/
/*
function fibo_static2() {

    static $ar = array(0,1);
    $ar[2] = $ar[0] + $ar[1];
    
    for( $i = 2 ; $i <= 20 ; $i++ ) {
        $ar[$i] = $ar[$i-1] + $ar[$i-2];
    }

    foreach ( $ar as $e ) {
        echo " ".$e;
    }
}
fibo_static2();
*/



echo PHP_EOL;
echo "============================================";
echo PHP_EOL;









