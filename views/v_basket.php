<div class="basket">
    <div class="basket-item">
        <p>Наименование</p>
        <p>Цена</p>
        <p>Количество</p>
    </div>
    <form action="index.php?c=basket&act=order" method="post">

        <?foreach ($res as $data):?>

            <div class="basket-item">
                <p><?=$data['name']?></p>
                <p><?=$data['price']?></p>
                <input type="number" value="<?=$data['count']?>" name="<?='count[]'?>">
            </div>

        <? endforeach; ?>

            <div class="basket-submit">
                <input type="submit" value="Собрать заказ">
            </div>

    </form>

</div>

