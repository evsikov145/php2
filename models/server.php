<?php

include "db.php";

$salc = "145541evsikov145541";
$login = $_POST['login'];
$password = $_POST['password'];
$password = md5($password).$salc;
$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO users(login,password,name,email) VALUES ('$login','$password','$name','$email' )";

$res = mysqli_query($connect, $sql);

if ($res) {
    header("Location: ../views/auth.php");
} else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
}