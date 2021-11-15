<?php

spl_autoload_register(function ($class) {
    include __DIR__ .'/'.$class.'.php';
});

// create users
$toto = new User("toto",25);
$tata = new User("tata",35);
$nicolas = new User("nicolas",36);

// create database
$database = new Database;

// add user in database
$database->addUser($toto);
$database->addUser($tata);


// take user in database
echo PHP_EOL;
$database->getUser($toto);
echo PHP_EOL;
$database->getUser($nicolas);



