<?php


spl_autoload_register(function ($class) {
    $class = substr($class, 11);
    include __DIR__ .'/'.$class.'.php';
});
use Formulaire\{Password,LastName,Name,Number,Contener,Formulaire};


// exercice ici ==============

$form = new Formulaire($tab);
echo PHP_EOL;
$form->display();
echo PHP_EOL;

// end =====
//=========================

// ====== entrainement container =====================

$tab=[
    $pass = new Password("1234"),
    $name = new LastName("JoJo"),
    $firstName = new Name("toto"),
    $age = new Number("25")
];

$storage = new Contener;

$storage->addElement($pass);
$storage->addElement($name);
$storage->addElement($firstName);
$storage->addElement($age);

$elem = $storage->getElement("toto");





