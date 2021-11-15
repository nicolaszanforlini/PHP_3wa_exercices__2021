<?php

/*
function genFile($file){

    $f = fopen($file, 'r');

    while($line = fgets($f)) {
        $i = (int) $line;
        if ($i % 2 === 0) {
            yield $line; 
        }
    } 
    fclose($f);
}

$gen = genFile('./test.txt');

foreach($gen as $line){
        echo $line;
}
*/


function genFile($file){

    $f = fopen($file, 'r');

    while($line = fgets($f)) {
        $s = (string) $line;
    //    $s = "'".$line."'";
        $str = explode("=", $s);
        yield $str[0].PHP_EOL;
    }
    fclose($f);
}

$gen = genFile('./content.txt');

foreach($gen as $line){
        echo $line;
    }


