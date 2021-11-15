<?php namespace redux_php;


require_once 'autoload.php';

const INCREMENT = "INCREMENT";
const DECREMENT = "DECREMENT";

$initialState = [ 'count' => 0 ];

$reducer = new Reduce( $initialState );
$store = new Store( $reducer, $initialState );

$store->dispatch(new Action( "INCREMENT", ['number' => 1] ) ) ;
$store->dispatch(new Action( "INCREMENT", ['number' => 1] ) ) ;
$store->dispatch(new Action( "INCREMENT", ['number' => 1] ) ) ;
$store->dispatch(new Action( "DECREMENT", ['number' => 1] ) ) ;
$store->dispatch(new Action( "DECREMENT", ['number' => 1] ) ) ;
$store->dispatch(new Action( "INCREMENT", ['number' => 1] ) ) ;







