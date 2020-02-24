<?php
    include "../models/db.php";
    session_start();
    include "../models/get-basket.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров</title>
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
<form action="../models/order.php" method="post">
    <div class="basket">
        <? $res = getBasket($connect);
        while($data = mysqli_fetch_assoc($res)): ?>
            <div class="basket-item">
                <p name="name"><?=$data['name']?></p>
                <input type="number" name="count" step="1" min="1" max="100" value="<?=$data['count']?>">
            </div>
        <? endwhile; ?>

        <button type="submit">Оформить заказ</button>
    </div>
</form>


<footer>
</footer>
</body>
</html>
