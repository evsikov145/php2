<?php

spl_autoload_register(function ($className){
    include "$className.php";
});

class Weight extends Drives
{
    function __construct(){
        $this->display();
        $this->total();
    }

    function display() {
        echo "Вы покупаете копию игры ".$this->getName()." оптом. Она находится в категории ".$this->getType().".<br>";
    }

    function total() {
        $onePrice = $this->getPrice();
        $onePrice /= 2;
        $quantity = 10;
        $price = $onePrice * $quantity;
        echo "Оптовая цена равна ".$onePrice." рублей. Вы покупаете ".$quantity." копий игры. Общая стоимость составляет ".$price." рублей.<br>";
    }
}