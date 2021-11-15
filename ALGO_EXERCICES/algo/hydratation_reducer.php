<?php

// sum
$sum = function ($r, $nb) : int {
    $r += $nb;
    return $r;
};

// reduce
function reduce(array $t, callable $f, $init = 0) {
    foreach($t as $n) {
        $init = $f($init, $n);
    }
    return $init;
}

$products = [['milk', 3, 3], ['butter', 2.5, 2],['eggs', .7, 10]];

$tab = [];
foreach($products as $elem) {

    $prod = new class (name : $elem[0], price : $elem[1], quantity : $elem[2]) {

        public function __construct(
        public string $name,
        public float $price,
        public float $quantity) {
    }

        public function tva($el) {
            $el += $el * 0.20;
            $this->price = number_format($el, 2, '.', '');
            return($this->price);
        }
    };
    $tab[] =  $prod;  
}

print_r($tab);







