<?php

// mapped

function mapped($glue, $array, $symbol) {

    for($i=0;$i<=2;$i++){
        foreach ($array as $elem => $el) {
            $str[$i] .= " ".$elem." ".$symbol." ".$el." ".$glue." ";
        }
    }
    return $str;
}

$res = mapped($g=",", $ar=array('x'=>3,'y'=>7,'z'=>9), $s="=");
foreach($res as $element){
    echo $element;
}







