<?php

include "models/goods.php";

session_start();

$goods = goodsAll($connect);

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
    $template = $twig->loadTemplate('gallery.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание

    $content = $template->render(array(
        'goods' => $goods,
        'title' => 'Каталог товаров'
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