<?php namespace Formulaire;





class Number implements Formulable {

    private string $text = "age";

    public function __construct(protected string $value) {}


    public function getName() :string {
        return $this->text;
    }
    public function getValue() :string {
        return $this->value;
    }

    public function input(string $n) {
        $this->value = $n;
    }

    public function to_string(): void {
        echo $this->text." : ".$this->value."\n";
    }


}