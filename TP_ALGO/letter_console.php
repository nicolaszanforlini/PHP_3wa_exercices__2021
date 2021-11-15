<?php

class Letter {

    private int $nbsLetters;
    
    private function setNbsLetters() { $this->nbsLetters = $this->generate(); }

    public function generate( $nbs ) : array {
        $range = range('a', 'z');
        $str = "";
        foreach($range as $letter) {
            $str .= $letter;
        }
        $randomLetter = substr( str_shuffle( $str ), 0, $nbs );
        $resultStr = str_split($randomLetter, 1);
        return $resultStr;
    }
    
}

class Console {

    private array $tab;

    private function setTab( array $t ) { $this->tab = $t; }

    public function __construct( array $t ) { $this->setTab( $t ); }

    public function show() : string {
        $res = "";
        foreach( $this->tab as $el ) {
            $res .= $el." ";
        }
        return $res;
    }
}

$letter = new Letter();
$alph = $letter->generate(10);

$console = new Console($alph);
echo "=================".PHP_EOL.$console->show( $alph ).PHP_EOL."=================";

