<?php session_start()?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
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
<div class="registration">
    <? if($_GET['success-false']):?>
        <h1>Ошибка авторизации!</h1>
    <? else : ?>
        <h1>Авторизуйтесь пожалуйста!</h1>
    <? endif;?>

    <form action="../models/auth-server.php" method="post">
        <p>Введите ваш логин</p>
        <input type="text" name="login" value="<?=$_SESSION['login']?>">
        <p>Введите ваш пароль</p>
        <input type="password" name="password" value="<?=$_SESSION['password']?>"><br><br>
        <input type="submit" value="Авторизоваться">
    </form>
</div>
<footer>
</footer>
</body>
</html>
