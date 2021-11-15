<?php


function split_ar(array $a, int $nb) : array {

    $res1 = [];
    $res2 = [];

    $i = 0;
    while ($i < sizeof($a)) {
        if($i != $nb ) {
            $res1[$i] = $a[$i];
        }else{
            $res2[$i] = $a[$i];
        }
        $i++;
    }
    $i++;
    $sizeTab1 = count($res1);
    $sizeTab2 = count($res2);
    if ( count($res1) < count($res2) ) {
        return $res2;
    }else{
       return $res1; 
    } 
}   


$result = split_ar(array(3,6,9,7), 2);
print_r($result);







