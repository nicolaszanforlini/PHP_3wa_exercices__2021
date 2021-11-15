<?php namespace Depend;



class Container  {

    public function __construct( protected \SplObjectStorage $storage ) {
        $this->storage = $storage;
    }


    public function setStorage( Interest $i, string $n ) {
        $this->storage->attach( $i, $n );

        return $this;
    }

    public function getStorage( string $name ) :Interest {

        // Remet l'itérateur au début
       $this->storage->rewind();

       // valid indique qu'il y a encore un élément à dépiler et si plus rien ça retourne false
       while($this->storage->valid()){

        // var_dump($this->storage->getInfo());
        // var_dump($this->storage->current()); // objet enregistrer à cette position dans le SplObjectStorage
            if($name === $this->storage->getInfo()){

            return $this->storage->current(); // Objet interest
        }
        // avancer à l'itération suivante
        $this->storage->next();
       }

    }

}