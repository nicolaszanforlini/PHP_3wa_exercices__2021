<?php

namespace App\Model;



interface Calc {

    public function exec(Number $a, Number $b): NumberString;
    

}

