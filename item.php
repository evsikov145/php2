<?php 
    include "models/goods.php";

    $id = $_GET['id'];

    session_start();

$good = goodsGet($connect, $id);

$login = $_SESSION['login'];

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';


Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('item.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание

    $content = $template->render(array(
        'good' => $good,
        'title' => 'Страница товара'
    ));

    $template = $twig->loadTemplate('header.tmpl');
    $header = $template-> render(array(
        'login' => $login
    ));

    $template = $twig->loadTemplate('footer.tmpl');
    $footer = $template-> render(array(

    ));

    echo $header;
    echo $content;
    echo $footer;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>