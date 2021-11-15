<?php

require_once __DIR__.'/vendor/autoload.php';

use Inter\{Cart,Book,Bike,Music};


$products = [
    new Book('Moby Dick', 30),
    new Music('AC/DC', 17.5),
    new Bike('Brompton', 1430),
];

$cart = new Cart;

foreach($products as $product) {
    $cart->buy($product, 5);
}

echo PHP_EOL;
echo  "prix total : ".$cart->total()  . "\n";
echo PHP_EOL;


