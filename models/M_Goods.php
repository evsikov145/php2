<?php

include_once 'M_Db.php';

class M_Goods
{

    public function goodsAll()
    {
        $connect = new M_Db();
        $sql = "SELECT * FROM `item`";
        $res = $connect->select($sql);
        return $res;
    }

    public function goodsGet($id)
    {
        $connect = new M_Db();
        $sql = "select * from item where id=$id";
        $res = $connect->select($sql, ['id' =>$id]);
        return $res;
    }
}
