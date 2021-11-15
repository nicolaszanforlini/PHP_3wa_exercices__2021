<?php


interface IStrategy {
    
    public function execute( string $message );
}


class Humain implements IStrategy {
    
    public function execute( string $message ) :string{
        return strtoupper( $message );
    }
}

class Robot implements IStrategy{
    
    public function execute( string $message ) :string {
        return strtolower( $message );
    }
}


abstract class Context {

    public function __construct( protected IStrategy $strategy ){
    }

    abstract public function getUse( string $message );
}


class A extends Context {
    
    public function getUse( string $message ) {
        return $this->strategy->execute( $message );
    }
}




echo (new A(new Humain))->getUse("Hello world");
print_r("\n");
echo (new A(new Robot))->getUse("HelLo WoRLd");
print_r("\n");


