<?php

// zipped

function zipper( $tab1, $tab2 ) : array {

    $result = [];
    if(count($tab1) == count($tab2)) {
        for($i=0;$i<count($tab1);$i++) {
            $tmp = [];
            array_push($tmp, $tab1[$i]);
            array_push($tmp, $tab2[$i]);
            array_push($result, $tmp);
        }
        return $result;
    }else {
        return array("tableau dimen ko");
    }
}
$tab2Dimen = zipper($t1=[2,5,8], $t2=[9,6,3]);
print_r($tab2Dimen);

