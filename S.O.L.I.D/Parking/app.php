<?php

require_once __DIR__.'/vendor/autoload.php';

use Parking\{Car,Plane,Vehicule,Bike,Parkable,Parking,Ferry};




$park1 = new Parking;
$kia = new Car("kia", "car");
$kia2 = new Car("kia2", "car");
$peugeot = new Car("peugeot", "car");
$kawa = new Bike("kawa", "bike");
$honda = new Bike("honda", "bike");

$park1->addPark($kia, "parkingTest", 10.5, "26");
$park1->addPark($kia2, "parkingTest", 10.5, "27");
$park1->addPark($peugeot, "parkingTest", 10.5, "28");
$park1->addPark($kawa, "parkingToto", 11.5, "15");
$park1->addPark($honda, "parkingToto", 11.5, "11");

$park1->count();

$park1->removePark($kawa);

$park1->count();


