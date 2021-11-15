<?php

require_once __DIR__.'/vendor/autoload.php';

use Panier\{Cart,Storable,StorageArray,StorageSession,Product,Productable};


//$Storable = new Storable;
//$StorableArray = new $StorableArray;
//$StorableSession = new $StorableSession;



$products = [
    'apple' => new Product('apple', 10.5),
    'raspberry' => new Product('raspberry', 13),
    'strawberry' => new Product('strawberry', 7.5),
    'orange' => new Product('orange', 7.5),
];

$storage =  new StorageArray;
$cart = new Cart($storage);

extract($products);


$cart->buy($apple, 3);
$cart->buy($apple, 4);
$cart->buy($apple, 5);
$cart->buy($strawberry, 10);

echo "\n";
echo $cart->total() ;
echo "\n";

echo "restore" . "\n";
$cart->restore($strawberry);

echo "\n";
echo $cart->total() ;
echo "\n";
