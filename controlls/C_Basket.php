<?php

include_once "C_Base.php";
include_once './models/M_Basket.php';
include_once './models/M_Db.php';

class C_Basket extends C_Base {

    public function action_get(){
        $items = new M_Basket();
        $res = $items->basketAll();
        $this->content = $this->Template('views/v_basket.php', array('res' => $res));
    }
    public function action_add(){
        $items = new M_Basket();
        $res = $items->basketAll();
        $this->content = $this->Template('views/v_basket.php', array('res' => $res));
    }
    public function action_del(){

    }
}