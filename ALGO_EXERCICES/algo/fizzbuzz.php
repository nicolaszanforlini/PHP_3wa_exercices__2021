<?php

// fizzbuzz if, else

function fizzbuzz () {
    $result_fiz = "";
    for($i=0;$i<=100;$i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $result_fiz .=  $i." % 3 et % 5 = ".($i%5)." Fizz Buzz ".PHP_EOL;
        } else if($i % 3 == 0) {
            $result_fiz .= $i." % 3 "."= ".($i%3)." Fizz ".PHP_EOL;
        } else if ($i % 5 == 0) {
            $result_fiz .= $i." % 5 "."= ".($i%5)." Buzz ".PHP_EOL;
        }
    }
    return $result_fiz;
}
$result_fizzbuzz_if = fizzbuzz();
echo $result_fizzbuzz_if;
echo PHP_EOL;



// fizzbuzz match

echo "============================================";
echo PHP_EOL;
function fizzbuzzMatch () {

    for($i=0;$i<=100;$i++) {
        $res = match (0) {
            ($i%3)+($i%5) => "fizzbuzz",
            $i%3 => "fizz",
            $i%5 => "buzz",
            default => "",
        };
        echo $res;
        echo PHP_EOL;
    }
}
fizzbuzzMatch();








