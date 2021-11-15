<?php


class Calculator {
    
    private $result;
    private array $tab;
    private bool $activeCalc;

    public function __construct($tab) {
        $this->setTab($tab);
    }
    private function setTab( $tab ) {
        $this->tab = $tab;
        $this->activeCalc = true;
        $this->divParZero( $tab );
    }
    public function getTab() : array {
        return $this->tab;
    }
    private function setResult($res) {
        $this->result = $res;
    }
    public function getResult() {
        return $this->result;
    }

    private function addition() {
        $this->setResult($this->tab[0][0] + $this->tab[0][1]);
    }
    private function soustraction() {
        $this->setResult($this->tab[0][0] - $this->tab[0][1]);
    }
    private function multiply() {
        $this->setResult($this->tab[0][0] * $this->tab[0][1]);
    }
    private function division() {
        $this->setResult($this->tab[0][0] / $this->tab[0][1]);
    }

    public function calc() {

        if( $this->activeCalc ) {
            switch ( $this->tab[1][0] ) {
                case "+":
                    $this->addition();
                    break; 
                case "-":
                    $this->soustraction();
                    break; 
                case "*":
                    $this->multiply();
                    break;
                case "/":
                    $this->division();
                    break;
                default:
                    $this->setResult("Error : opérateur inconnu");
            }
        }
        return $this->result;
    }
    public function affiche () {
        return $this->tab[0][0]." ".$this->tab[1][0]." ".$this->tab[0][1]." = ".$this->result.PHP_EOL;
        }
    private function divParZero ($tab) {
        if( $tab[0][1] == 0 ) {
            throw new Exception("Error : division par 0");
            $this->activeCalc = false;
        }
    } 
}

try {
    $calculator1 = new Calculator([ [11, 2], ["+"] ]);
    $res1 = $calculator1->calc();
    echo $calculator1->affiche();

    $calculator2 = new Calculator([ [26, 6], ["-"] ]);
    $res2 = $calculator2->calc();
    echo $calculator2->affiche();

    $calculator2 = new Calculator([ [5, 3], ["*"] ]) ;
    $res3 = $calculator2->calc();
    echo $calculator2->affiche();

    $calculator3 = new Calculator([ [80, 2], ["/"] ]);
    $res4 = $calculator3->calc();
    echo $calculator3->affiche();

    $calculator5 = new Calculator([ [22, 10], ["@"] ]);
    $res6 = $calculator5->calc();
    echo $calculator5->affiche();

    
    $calculator4 = new Calculator([ [48, 0], ["/"] ]);
    $res5 = $calculator4->calc();
    echo $calculator4->affiche();
    echo "=====================================";
}catch(Exception $e) {
    echo $e->getMessage();
}




