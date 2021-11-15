<?php namespace Formulaire;




class Password implements Formulable {

    private string $text = "password";

    public function __construct(protected string $value) {}


    public function getName() :string {
        return $this->text;
    }

    public function getValue() :string {
        return $this->value;
    }

    public function input(string $t) {
        $this->text = $t;
    }

    public function to_string(): void {
        echo $this->text." : ".$this->value."\n";
    }



}