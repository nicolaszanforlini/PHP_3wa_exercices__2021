<?php

abstract class Human {

    // attributs
    private string $name;
    private int $life;

    // setters
    private function setName( $n ) { $this->name = $n; }
    private function setLife( $l ) { $this->life = $l; }

    //getters
    protected function getName() { return $this->name; }
    protected function getLife() { return $this->life; }

    // constructor
    public function __construct( $n, $l ) {
        $this->setName( $n );
        $this->setLife( $l );
    }

    // methode affiche abstraite
    abstract protected function affiche();

}

// class magicien heritage de Human
class Magicien extends Human {
    
    private string $magie;

    private function setMagie( $magie ) { $this->magie = $magie; }
    public function getMagie() { return $this->magie; }

    public function __construct( $name, $life, $magie ) {
        parent::__construct( $name, $life );
        $this->setMagie( $magie );
    }

    public function affiche() {
        echo "je suis ".$this->getName()." avec ".$this->getLife()." de vie et ".$this->getMagie()." comme magie".PHP_EOL;
    }


}

// trait de la methode affiche
trait PourAffiche {
    public function affiche() {
        parent::affiche();
        echo "test du trait".PHP_EOL;
    }
}

// class heritage de magicien utilisation de trait pour la methode affiche du magicien
class TestTrait extends Magicien {
    use PourAffiche;
}


$merlin = new TestTrait("merlin", 100, "feu");
$merlin->affiche();


echo "============== exemple 2 ================".PHP_EOL;

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo ' !!!!!!! ';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();




