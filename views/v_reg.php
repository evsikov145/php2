<? if($successFalse):?>
<h1>Регистрация не пройдена!</h1>
<? endif; ?>
<div class="registration">
    <h1>Регистрация нового пользователя</h1>
    <form action="index.php?c=users&act=reg" method="post">
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