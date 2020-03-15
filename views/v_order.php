
<div class="order">
    <div class="order-title">
        <p>Ваш заказ</p>
    </div>

            <div class="order-item">
                <p>Наименование</p>
                <p>Цена</p>
                <p>Количество</p>
            </div>

        <?foreach ($res as $data):?>

            <div class="order-item">
                <p><?=$data['name']?></p>
                <p><?=$data['price']?></p>
                <p><?=$data['count']?></p>
            </div>

        <? endforeach; ?>
    <div class="order-block">
        <form action="#" method="post">
            <p>Для оформления заказа введите данные:</p>
            <input type="text" name="name" placeholder="* Введите ваше имя">
            <input type="tel" name="tel" placeholder="* Введите ваш номер телефона">
            <button type="submit">Отправить заявку</button>
        </form>

    </div>
</div>