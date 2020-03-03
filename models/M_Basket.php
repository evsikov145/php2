<?php

include_once 'M_Db.php';

class M_Basket {
    public function basketAll() {
        $connect = new M_Db();
        $sql = "SELECT * FROM `basket`";
        $res = $connect->select($sql);
        return $res;
    }
    public function basketAdd() {
        $connect = new M_Db();
        $sql = "INSERT INTO `basket` VALUES ()";
        $res = $connect->select($sql);
        return $res;
    }
    public function basketDel() {

    }
    public function basketUpt() {

    }
}