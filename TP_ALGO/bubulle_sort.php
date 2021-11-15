<?php


// fonction sort
function mySort( array $tab, string $str ) : array {

    $permut = true;
    $sizeTab = sizeof($tab);
    $passage = 0;
    while($permut) {
        $permut = false;
        $passage += 1;
        if( $str == "asc" ) {
            for( $i=0; $i<$sizeTab-$passage ; $i++ ) {
                if( $tab[$i] > $tab[$i + 1]) {
                    $permut = true;
                    $tmp = $tab[$i + 1] ;
                    $tab[$i + 1] = $tab[$i];
                    $tab[$i] = $tmp;
                }
            }
        }elseif( $str == "desc" ) {
            for( $i=0; $i<$sizeTab-$passage ; $i++ ) {
                if( $tab[$i] < $tab[$i + 1]) {
                    $permut = true;
                    $tmp = $tab[$i + 1] ;
                    $tab[$i + 1] = $tab[$i];
                    $tab[$i] = $tmp;
                }
            }
        }
    }
    return $tab;
};

// fonction asc
$desc = function ( array $tab ) : array {
    return mySort( $tab, "desc" );
};

// fonction dec
$asc = function ( array $tab ) : array {
    return mySort( $tab, "asc" );
};


// fonction bubulle_sort
function bubulle_sort ( array $tab, callable $fn, $init=0 ) {
    $init = $fn( $tab );
    return $init;
}

$tab = [9,4,6,3,7,25,33,1,88,44,64,24];

print_r( bubulle_sort ( $tab, $asc ) );
echo PHP_EOL;
echo "==================================";
echo PHP_EOL;
print_r( bubulle_sort ( $tab, $desc ) );
