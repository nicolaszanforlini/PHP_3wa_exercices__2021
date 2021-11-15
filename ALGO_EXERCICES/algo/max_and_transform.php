<?php
/*
echo "======== algo function max =======";
echo PHP_EOL;
    function getMax($nbs) {

        $result = $nbs[0];
        foreach($nbs as $elem) {
            if($elem > $result) {
                $result = $elem;
            }
        }
        return $result;
    }

$tab = [20,2,9,7,35];

$res = getMax($tab);
echo $res;
*/
/*
echo PHP_EOL;
echo "============================================";
echo PHP_EOL;
*/
/*
echo "======== transform int  with unit test =======";
echo PHP_EOL;
function transform($tab) : array {

    $res_tab = [];
    foreach( $tab as $elem ) {
        $res = $elem * 2;
        array_push($res_tab, $res);
    }
    return $res_tab;
}

$t = [1,2,3,4];
$res_transf = transform($t);

print_r($res_transf);

function testT() {
    $t2 = [1,2,3,4];

    $transformation = transform($t2);

    assert(is_array($transformation));
    assert($transformation[0]=== 2);
    assert($transformation[1]=== 4);
    assert($transformation[2]=== 6);
    assert($transformation[3]=== 8);
}

testT();
*/
/*
echo PHP_EOL;
echo "============================================";
echo PHP_EOL;
*/
/*
echo PHP_EOL;
echo "============================================";
echo PHP_EOL;
echo "======== transform string to upper with unit test =======";
echo PHP_EOL;
function transformString($tab) : array {

    $res_tab = [];
    foreach( $tab as $elem ) {
        $res = strtoupper($elem) ;
        array_push($res_tab, $res);
    }
    return $res_tab;
}

$t = ['un','deux','trois'];
$res_transf = transformString($t);

print_r($res_transf);


function testString() {
    $chaine = ['un','deux','trois'];

    $transformation = transformString($chaine);

    assert(is_array($transformation));
    assert($transformation[0]=== 'UN');
    assert($transformation[1]=== 'DEUX');
    assert($transformation[2]=== 'TROIS');
}

testString();
*/

echo PHP_EOL;
echo "============================================";
echo PHP_EOL;












