<?php namespace Formulaire;


interface Formulable {

    public function input(string $s);
    public function getName() :string;
    public function getValue() :string;
    public function to_string() :void;

}