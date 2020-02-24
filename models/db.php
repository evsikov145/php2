<?php

const SERVER = "localhost";
const LOGIN = "root";
const PASSWORD = "";
const DB = "catalog";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Ошибка соединения с базой данных!");