<?php

include_once "C_Base.php";
include_once "C_Page.php";
include_once './models/M_Basket.php';
include_once './models/M_Db.php';
include_once './models/M_Goods.php';

class C_Basket extends C_Base {

    public function action_all(){
        $items = new M_Basket();
        $res = $items->basketAll();
        $this->content = $this->Template('views/v_basket.php', array('res' => $res));
    }
    public function action_add(){
        $id = $_GET['id'];
        $items = new M_Basket();
        $items->basketAdd($id);

        $goods = new M_Goods();
        $query = $goods ->goodsAll();

        $this->content = $this->Template('views/v_index.php', array('query' => $query));
    }
    public function action_order(){
        $count = $_POST['count'];

        $items = new M_Basket();

//        $upd = $items->basketUptCount($count);
        $res = $items->basketAll();
        $this->content = $this->Template('views/v_order.php', array('res' => $res));
    }
}