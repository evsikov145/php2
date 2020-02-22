<?php

abstract class Drives {

    public $name = "Warcraft";

    public $type = "Games";

    public $price = 2000;

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }
    abstract function total();

    abstract function display();
}