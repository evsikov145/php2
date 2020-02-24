<?php

session_start();

include "../models/goods.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <nav>
            <?php include "../templates/nav.php" ?>
        </nav>
        <? if($_SESSION['login']):?>
            <div class="user">
                <p>Вы зашли на сайт как <?= $_SESSION['login'] ?></p>
            </div>
            <div class="exit">
                <a href="../models/exit.php">Выйти</a>
            </div>
        <? endif;?>
    </header>
    <div class="content">
        <?php $res = goodsAll($connect);
        while($data = mysqli_fetch_assoc($res)) : ?>
            <div class="content-item">
                <div class="content-img">
                    <img src="<?=$data['path'] ?>" alt="<?=$data['name'] ?>" class="content__img">
                </div>

                <p class="content__name"><?=$data['name'] ?></p>
                <p class="content__price">Стоимость: <?=$data['price'] ?> рублей</p>
                <p class="content__desc"><?=$data['desk']?></p>
                <a href="item.php?id='<?=$data['id']?>'" target="_blank">Подробнее</a>
                <a href="../models/goods_del.php?id='<?=$data['id']?>'" target="_blank">Удалить товар</a>
            </div>
        <?php endwhile; ?>
    </div>
    <footer>
    </footer>
</body>
</html>