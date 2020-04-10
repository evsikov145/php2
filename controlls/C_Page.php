<?php
include_once 'C_Base.php';
include_once './models/M_Goods.php';
include_once './models/M_Db.php';


class C_Page extends C_Base
{
	public function action_index(){
		$this->title = 'Каталог товаров';

        $goods = new M_Goods();
        $query = $goods ->goodsAll();

		$this->content = $this->Template('views/v_index.php', array('query' => $query));
	}

    public function action_item(){
        $id = $_GET['id'];
        $this->title = 'Страница товара';

        $goods = new M_Goods();
        $query = $goods ->goodsGet($id);

        $this->content = $this->Template('views/v_item.php', array('query' => $query));
    }
}
