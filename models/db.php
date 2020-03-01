<?php
define("SERVER", "localhost");
define("LOGIN", "root");
define("PASSWORD", "");
define("DB", "catalog");

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Ошибка соединения с базой данных!");