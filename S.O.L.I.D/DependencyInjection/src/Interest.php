<?php namespace Depend;



class Interest  {

    private string $name;

    public function __construct(string $n) {
        $this->setName($n);
    }

    public function setName(string $name) {
        $this->name=$name;
    }
    public function getName() :string {
        return $this->name;
    }

    


}