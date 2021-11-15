<?php namespace Formulaire;






class Name implements Formulable {

    private string $text = "name";

    public function __construct(protected string $value) {}

    public function getName() :string {
        return $this->text;
    }
    public function getValue() :string {
        return $this->value;
    }

    public function input(string $t) {
        $this->value = $t;
    }
    public function to_string(): void {
        echo $this->text." : ".$this->value."\n";
    }





}