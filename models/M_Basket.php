<?php

include_once 'M_Db.php';

class M_Basket
{
    public function basketAll()
    {
        $connect = new M_Db();
        $sql = "SELECT * FROM `basket`";
        $res = $connect->select($sql);
        return $res;
    }

    public function basketGet($id)
    {

        $connect = new M_Db();
        $sql = "SELECT name, price FROM `item` WHERE id = :id";
        $res = $connect->getRow($sql, array('id' => $id));
        return $res;
    }

    public function basketInfo($id){
        $connect = new M_Db();
        $sql = "SELECT count FROM `basket` WHERE id_good = :id";
        $res = $connect->getRow($sql, array('id' => $id));
        return $res;
    }

    public function basketAdd($id)
    {
        $res = $this->basketInfo($id);
        $count = $res['count'];
        if($count){
            $connect = new M_Db();
            $count++;
            $sql = "UPDATE `basket` SET count = :count WHERE id_good = :id";
            $connect->update($sql, array('id' => $id, 'count' => $count));
        } else {
            $arr = $this->basketGet($id);
            $name = $arr['name'];
            $price = $arr['price'];
            $price = (int)$price;
            $connect = new M_Db();
            $sql = "INSERT INTO `basket`(id_good, name, price) VALUES (:id, :name, :price)";
            $connect->insert($sql, array('id' => $id, 'name' => $name, 'price' => $price));
        }

    }

    public function basketDel()
    {
        
    }

    public function basketUpt()
    {

    }
}