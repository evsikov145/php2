<div class="basket">
    <div class="basket-item">
        <p>Наименование</p>
        <p>Цена</p>
        <p>Количество</p>
    </div>
    <?foreach ($res as $data):?>

        <div class="basket-item">
            <p><?=$data['name']?></p>
            <p><?=$data['price']?></p>
            <input type="number" value="<?=$data['count']?>">
        </div>

    <? endforeach; ?>

</div>

