<?php
include "../models/goods.php";
require_once "../models/db.php";
require_once "../models/goods.php";
session_start();

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
<div class="content">
    <form action="../models/goods_add.php" method="post"  enctype="multipart/form-data">
        <p>Введите наименование товара:</p>
        <input type="text" name="name">
        <p>Введите описание товара:</p>
        <textarea name="desk" maxlength="2000" rows="10" cols="100"></textarea>
        <p>Загрузите фото товара:</p>
        <input type="file" name="file" accept=image/*>
        <p>Введите цену товара:</p>
        <input type="text" name="price"><br><br>
        <input type="submit" value="Отправить">
    </form>
</div>
<footer>
</footer>
</body>
</html>
