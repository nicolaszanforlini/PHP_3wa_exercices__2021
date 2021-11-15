<?php namespace Depend;



class User  {

    private string $name;
    private \SplObjectStorage $storage;

    public function __construct( \SplObjectStorage $s ) {
        $this->storage = $s;
    }

    public function setInterest( Interest $i ) {
        $this->storage->attach( $i );

        return $this;
    }

    
    public function getInterests() {
        foreach($this->storage as $s){
            echo "Interest: ".$s->getName().PHP_EOL;
        }
    }
    


}
