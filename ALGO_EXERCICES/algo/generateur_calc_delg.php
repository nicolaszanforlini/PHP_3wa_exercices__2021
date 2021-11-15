<?php
/*
function gen1($nb) {
    for($i=0;$i<$nb;$i++) {
        yield 1;
    }
}

function genP($max) {
    for($i=0;$i<$max;$i++) {
        if($i % 3 == 0) {
            yield from gen1($i);
        }else{
            yield $i;
        }
    }
}

$gen = genP(16);
foreach($gen as $v) echo $v." ";
*/

function gen(){
    $n = fopen('../shop/noms.txt', 'r');
    while($lineN = fgets($n)) {
        $name[] = explode("=", $lineN);    
    }
    fclose($n);
    $p = fopen('../shop/depenses.txt', 'r');
    while($lineP = fgets($p)) {
        $price[] = explode("=", $lineP);    
    }
    fclose($p);
    for($i=0;$i<count($name);$i++) {
        yield $name[$i][1]." : ".$price[$i][1];
    }
}

$genFile = gen();
foreach($genFile as $line) echo $line;






