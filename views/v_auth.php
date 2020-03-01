

<div class="registration">
    <? if($successFalse == true):?>
        <h1>Ошибка авторизации!</h1>
    <? elseif($success == true): ?>
        <h1>Спасибо за авторизацию!</h1>
    <? else: ?>
        <h1>Авторизуйтесь пожалуйста!</h1>
    <? endif;?>

    <form action="index.php?c=users&act=auth" method="post">
        <p>Введите ваш логин</p>
        <input type="text" name="login" value="<?=$_SESSION['login']?>">
        <p>Введите ваш пароль</p>
        <input type="password" name="password" value="<?=$_SESSION['password']?>"><br><br>
        <input type="submit" value="Авторизоваться">
    </form>
</div>