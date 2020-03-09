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
        $sql = "SELECT name, price FROM `item` WHERE id = :id";
        $res = $connect->getRow($sql, array('id'=> $id));
        return $res;
    }
    public function basketAdd($id) {
        $id = (int)$id;
        $arr = $this->basketGet($id);
        $name = $arr['name'];
        print_r($name);
        $price = $arr['price'];
        print_r($price);
        $price = (int)$price;
        $connect = new M_Db();
        $sql = "INSERT INTO `basket`(id_good, name, price) VALUES (:id, :name, :price)";
        $res = $connect->insert($sql, array('id'=>$id, 'name'=>$name,'price'=> $price));
        return $res;
    }
    public function basketDel() {

    }
    public function basketUpt() {

    }
}

$a = new M_Basket();
$b = $a->basketAdd(3);
print_r($b);