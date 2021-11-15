<?php

// TVA without quantity

$total = function($el) {
    $el += $el * 0.20;
    $el = number_format($el, 2, '.', '');
    echo PHP_EOL;
    return($el);
};

$products = ['milk' => 3.5, 'butter' => 2.5, 'eggs' => 0.5 ];
$productWithTva = array_map($total, $products);
print_r($productWithTva);

// TVA with quantity

$quantity = [ 3 , 2 , 10 ];
$finalTabTvaQuantity = [];
$i=0;
foreach($productWithTva as $key => $value) {
    $tmp = $value * $quantity[$i];
    $tmp = number_format($tmp, 2, '.', '');
    $finalTabTvaQuantity[$key] = $tmp;
    $i++;
}
print_r($finalTabTvaQuantity);






