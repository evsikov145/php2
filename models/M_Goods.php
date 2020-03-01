<?php

include_once 'M_Db.php';

class M_Goods
{

    public function goodsAll()
    {
        $connect = new M_Db("localhost","root","","catalog");
        $connect->connect_pdo();
        $sql = "SELECT * FROM `item`";
        $res = $connect->getInfoPDO()->prepare($sql);
        $res->execute();
        return $res;
    }

    public function goodsGet($id)
    {
        $connect = new M_Db("localhost","root","","catalog");
        $connect->connect_pdo();
        $sql = "select * from item where id=$id";
        $res = $connect->getInfoPDO()->prepare($sql);
        $res->execute();
        return $res;
    }
}
