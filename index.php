<?php

spl_autoload_register(function ($className){
    include "$className.php";
});

$obj = new Digital();

$obj2 = new Piece();

$obj3 = new Weight();
