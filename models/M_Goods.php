<?php

include_once ("M_Db.php");

class M_Goods
{
    private $connect;

    public function __construct($connect)
    {
        $bd = new M_Db();
        $con = $bd->connect;
        $this->connect = $con;
    }

    public function goodsAll($connect)
    {

        $sql = "select * from item";
        $res = mysqli_query($connect, $sql);

        if (!$res) {
            die(mysqli_error($connect));
        }

        return $res;
    }

    public function goodsGet($connect, $id)
    {
        $sql = "select * from item where id=$id";
        $res = mysqli_query($connect, $sql);

        if (!$res) {
            die(mysqli_error($connect));
        }

        return $res;
    }
}
