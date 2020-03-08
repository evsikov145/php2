<?php

include_once 'M_Db.php';

class M_Basket {
    public function basketAll() {
        $connect = new M_Db();
        $sql = "SELECT * FROM `basket`";
        $res = $connect->select($sql);
        return $res;
    }
    public function basketGet($id) {
        $connect = new M_Db();
        $sql = "SELECT name, price FROM `item` WHERE id = $id";
        $res = $connect->select($sql, array('id'=> $id));
        return $res;
    }
    public function basketAdd($id) {

        $arr = $this->basketGet($id)->fetch();
        $name = $arr['name'];
        $price = $arr['price'];
        $connect = new M_Db();
        $sql = "INSERT INTO `basket`(id_good, name, price) VALUES ($id, $name, $price)";
        $res = $connect->insert($sql, array('id_good'=>$id, 'name'=>$name,'price'=> $price));
        return $res;
    }
    public function basketDel() {

    }
    public function basketUpt() {

    }
}

$a = new M_Basket();
$b = $a->basketAdd(1);
print_r($b);