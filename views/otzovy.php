<?php 
    include "../models/feedback.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзовы</title>
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
    <section class="feedback-content">
        <?php $res = feedbackAll($connect);
        while($data = mysqli_fetch_assoc($res)) :?>
            <div class="feedback-item">
                <div class="feedback-text">
                    <p>Отзыв написал(а) : <?= $data['name']?></p>
                    <p><?= $data['text']?></p>
                </div>
                <div class="feedback-img">
                    <p>Фото покупки :</p>
                    <img src="<?= $data['path'].$data['img']?>" alt="<?= $data['img']?>">
                </div>
                
            </div>
        <?php endwhile; ?>
    </section>
    <section class="feedback-write">
        <form action="../models/feedback.php" method="post" enctype="multipart/form-data">
            <p>Напишите свой отзыв о покупке в нашем магазине!</p>
            <input type="text" name="name" placeholder="Ваше имя"><br><br>
            <textarea name="text" placeholder="Ваш отзыв" maxlength="2000" rows="10" cols="100"></textarea><br><br>
            <input type="file" name="file" accept=image/*><br><br> 
            <button type="submit">Отправить</button>
        </form>
            
    </section>
    <footer></footer>
</body>
</html>