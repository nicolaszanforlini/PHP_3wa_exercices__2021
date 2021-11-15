<?php

echo PHP_EOL;


function transformNumber($tab) : array {

    $res_tab = [];
    foreach( $tab as $elem ) {
        $res = $elem * 2;
        array_push($res_tab, $res);
    }
    return $res_tab;
}

function transformString($tab) : array {

    $res_tab = [];
    foreach( $tab as $elem ) {
        $res = strtoupper($elem) ;
        array_push($res_tab, $res);
    }
    return $res_tab;
}








