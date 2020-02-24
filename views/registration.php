<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
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
    <h1>Регистрация нового пользователя</h1>
    <form action="../models/server.php" method="post">
        <p>Введите ваш логин</p>
        <input type="text" name="login">
        <p>Введите пароль</p>
        <input type="password" name="password">
        <p>Введите вашу электронную почту</p>
        <input type="email" name="email">
        <p>Введите ваше имя</p>
        <input type="text" name="name"><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
</div>
<footer>
</footer>


</body>
</html>