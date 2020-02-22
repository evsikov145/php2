<?php

spl_autoload_register(function ($className){
    include "$className.php";
});

class Piece extends Drives
{
    function __construct(){
        $this->display();
        $this->total();
    }

    function display() {
        echo "Вы покупаете штучную копию ".$this->getName().". Она находится в категории ".$this->getType().".<br>";
    }

    function total() {
        $price = $this->getPrice();
        $price *= 2;
        echo "Цена товара составляет ".$price." рублей.<br>";
    }
}