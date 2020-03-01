<?php

include_once ("../models/M_Db.php");

class M_Goods
{
    public function goodsAll()
    {
        $connect = new M_Db();
        $connect ->connect();

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
