<?php

class M_Db
{
    private $SERVER = "localhost";
    private $LOGIN = "root";
    private $PASSWORD = "";
    private $DB = "catalog";

    public function connect(){
        $connect = mysqli_connect("$this->SERVER", "$this->LOGIN", "$this->PASSWORD", "$this->DB") or die("Ошибка соединения с базой данных!");
        return $connect;
    }
}

$a = new M_Db();
$a ->connect();
print_r($a);