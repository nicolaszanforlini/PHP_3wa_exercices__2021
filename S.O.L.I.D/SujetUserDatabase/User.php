<?php



class User {

    private string $name;
    private int $age;

    public function __construct(string $n, int $a) {
        $this->setName($n);
        $this->setAge($a);
    }

    public function  setName(string $name) {
        $this->name = $name;
    }

    public function  setAge(int $age) {
        $this->age = $age;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getAge() : int {
        return $this->age;
    }



}