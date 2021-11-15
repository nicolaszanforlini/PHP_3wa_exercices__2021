<?php



class Database {

    private array $storage = [];
    private bool $exist = false;

    public function __construct() {}

    // echo is just to verify if this code is ok
    public function getUser(User $s) :bool {
        // if exist in database
        if (in_array($s, $this->storage )) {
            echo "exist = ".$s->getName();
            $this->exist = true;

            // get user
            return $this->exist;
            exit;
            
            } else {
        // if not in database
            echo "not exist = ".$s->getName().PHP_EOL;
            $this->exist = false;
        }
    return $this->exist;
    }

    public function addUser(User $user) :void {

        if (in_array($user, $this->storage )) {
            echo PHP_EOL.$user->getName()."already exist".PHP_EOL;
        } else {
            $this->storage[] = $user;
            echo PHP_EOL."add user ".$user->getName().PHP_EOL;
        }
    }

        

}