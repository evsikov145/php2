<?php

include_once ('models/M_Goods.php');

class C_Page extends C_Base
{
	public function action_index(){
		$this->title = 'Каталог товаров';

		$connect = new M_Goods();
		$res = $connect->goodsAll();

		$this->content = $this->Template('views/v_index.php', array(goods => $res));
	}

}
