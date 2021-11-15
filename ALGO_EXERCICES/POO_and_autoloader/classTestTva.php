<?php

class Produit {

    public function __construct(
        public float $price ,
        public string $name ,
        public float $quantity
    ) {}

    public function tva($el) {
        $el += $el * 0.20;
        $this->price = number_format($el, 2, '.', '');
        return($this->price);
    }
};

$milk = new Produit (3.5, 'milk', 3);
$butter = new Produit (2.5, 'butter', 2);
$egg = new Produit (0.5, 'eggs', 10);

$milkWithTva = $milk->tva($milk->price);
$butterWithTva = $butter->tva($butter->price);
$eggsWithTva = $egg->tva($egg->price);

$tabWithTva[$milk->name] = $milkWithTva;
$tabWithTva[$butter->name] = $butterWithTva;
$tabWithTva[$egg->name] = $eggsWithTva;

print_r($tabWithTva);
echo PHP_EOL;

 $products = ['milk' => 3.5, 'butter' => 2.5, 'eggs' => 0.5 ];
 $quantity = [3, 2, 10];

$finalTabTvaQuantity = [];
$i=0;
foreach($tabWithTva as $key => $value) {
    $tmp = $value * $quantity[$i];
    $tmp = number_format($tmp, 2, '.', '');
    $finalTabTvaQuantity[$key] = $tmp;
    $i++;
}
print_r($finalTabTvaQuantity);









