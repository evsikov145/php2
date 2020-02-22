<?php

spl_autoload_register(function ($className){
    include "$className.php";
});

class Digital extends Drives {

    function __construct(){
        $this->display();
        $this->total();
    }

    function display() {
        echo "Вы покупаете цифровую копию ".$this->getName().". Она находится в категории ".$this->getType().".<br>";
    }

    function total() {
        $price = $this->getPrice();
        echo "Цена товара составляет ".$price." рублей.<br>";
    }
}