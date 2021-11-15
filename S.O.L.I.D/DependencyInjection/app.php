<?php

require_once __DIR__.'/vendor/autoload.php';

use Depend\{Container,Interest,User};

$alan = new User( new SplObjectStorage() );
$container = new Container ( new SplObjectStorage() );

$sql = new Interest( "sql" );
$python = new Interest( "python" );

$container->setStorage( $sql, "sql" );
$container->setStorage( $python, "python" );

$sql = new Interest('sql');
$bigData = new Interest('python');

$container->getStorage('sql');

// User => consomme les services définis dans le container
$alan->setInterest($container->getStorage('sql')); // injection de dépendance du même service

var_dump($container->getStorage('sql'));

var_dump($alan->getInterests());



